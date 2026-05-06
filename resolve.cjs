const fs = require('fs');

function resolveConflict(filename) {
    const lines = fs.readFileSync(filename, 'utf-8').split('\n');
    const outLines = [];
    let skip = false;

    for (const line of lines) {
        if (line.startsWith('<<<<<<< HEAD')) {
            continue;
        } else if (line.startsWith('=======')) {
            skip = true;
            continue;
        } else if (line.startsWith('>>>>>>>')) {
            skip = false;
            continue;
        }

        if (!skip) {
            outLines.push(line);
        }
    }

    fs.writeFileSync(filename, outLines.join('\n'), 'utf-8');
}

resolveConflict(process.argv[2]);
