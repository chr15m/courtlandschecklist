from json import dumps

sections = []
section = []

for line in open("questions.txt", "r"):
    line = line.rstrip("\n")
    if line:
        if not line.startswith(" "):
            print("")
            print("## %s" % line)
            print("")
        else:
            stripped = line.strip(" ")
            print(" * [ ] %s" % stripped)

