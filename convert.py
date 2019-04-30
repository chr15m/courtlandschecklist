from json import dumps

sections = []
section = []

for line in open("questions.txt", "r"):
    line = line.rstrip("\n")
    if line:
        if not line.startswith(" "):
            section = [line]
            if section:
                sections.append(section)
        else:
            stripped = line.strip(" ")
            if section and stripped:
                section.append(stripped)

print(dumps(sections, indent=2))
