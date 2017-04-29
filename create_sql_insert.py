OUT = open('america_major_cities.sql', 'w')
IN = open('america_major_cities.txt')

for line in IN:
    line = line.strip()
    if line.startswith('#') or line == '': continue
    
    OUT.write('INSERT INTO cities VALUES (\"{}\");\n'.format(line))

IN.close()
OUT.close()
