index.html: index.php .classpath node_modules form.json
	php $^ > index.html

#form.html: render.cljs form.json .classpath
#	lumo -K -c `cat .classpath` render.cljs > form.html

node_modules:
	npm i

.classpath: project.clj
	lein classpath > .classpath

form.json: questions.txt
	python convert.py > $@
