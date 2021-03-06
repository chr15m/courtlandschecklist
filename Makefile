index.html: index.php .classpath node_modules form.json
	php $^ > index.html

#form.html: render.cljs form.json .classpath
#	lumo -K -c `cat .classpath` render.cljs > form.html

checklist.pdf: questions.txt tomd.py
	echo "Courtland's business validation checklist" > title.txt
	python tomd.py  | pandoc - -t latex -o $@ --toc -B title.txt
	rm title.txt

node_modules:
	npm i

.classpath: project.clj
	lein classpath > .classpath

form.json: questions.txt convert.py
	python convert.py > $@
