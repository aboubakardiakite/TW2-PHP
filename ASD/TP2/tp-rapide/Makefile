PROJECT=tp-rapide
AUTHOR=FIL-ASD
PYTHONPATH=./src
export PYTHONPATH
SPHINXBUILD=python3 -m sphinx
CONFIGPATH=.
SOURCEDOC=sourcedoc
DOC=doc

.PHONY: clean doc archive author

clean:
	rm -rf *~ */*~ *pyc */*pyc
	rm -rf __pycache__ */__pycache__
	rm -rf $(DOC)
	rm -f $(PROJECT).zip
	rm -f conf.py-e
	rm -rf .DS_Store

doc: author
	$(SPHINXBUILD) -c $(CONFIGPATH) -b html $(SOURCEDOC) $(DOC)

archive: clean
	zip -r $(PROJECT).zip . -x "sol/*"


author:
	sed -i -e 's/^project =.*/project = "Module $(PROJECT)"/g' conf.py
	sed -i -e 's/^copyright =.*/copyright = "2019, $(AUTHOR), ULille"/g' conf.py
	sed -i -e 's/^author =.*/author = "$(AUTHOR)"/g' conf.py
