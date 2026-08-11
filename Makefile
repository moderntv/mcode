.PHONY: install qa lint cs csf phpstan neon tests snapshots

# Everything that is linted with the shipped ruleset. Fixtures in tests/Sniffs
# are deliberately broken, so they are excluded.
sources := tests/bootstrap.php tests/Cases tests/Toolkit

install:
	composer update

qa: lint neon phpstan cs

lint:
	vendor/bin/parallel-lint bin tests

cs:
ifdef GITHUB_ACTION
	vendor/bin/phpcs -q --report=checkstyle --standard=ruleset.xml $(sources) | cs2pr
else
	vendor/bin/phpcs --standard=ruleset.xml $(sources)
endif

csf:
	vendor/bin/phpcbf --standard=ruleset.xml $(sources)

phpstan:
	vendor/bin/phpstan analyse -c phpstan.neon

neon:
	@grep -v '^[[:space:]]*#' src/phpstan.neon | grep -oE '\.\./\.\./\.\./[^ ]+\.neon' | sed 's|^\.\./\.\./\.\./|vendor/|' | while read -r file; do \
		test -f "$$file" || { echo "Missing include: $$file"; exit 1; }; \
		echo "OK: $$file"; \
	done

tests:
	vendor/bin/phpunit

snapshots:
	php bin/snapshots
