import sys
import re

def resolve_conflict(filename):
    with open(filename, 'r', encoding='utf-8') as f:
        lines = f.readlines()
    
    out_lines = []
    in_head = False
    skip = False
    
    for line in lines:
        if line.startswith('<<<<<<< HEAD'):
            in_head = True
            continue
        elif line.startswith('======='):
            in_head = False
            skip = True
            continue
        elif line.startswith('>>>>>>>'):
            skip = False
            continue
            
        if not skip:
            out_lines.append(line)
            
    with open(filename, 'w', encoding='utf-8') as f:
        f.writelines(out_lines)

resolve_conflict(sys.argv[1])
