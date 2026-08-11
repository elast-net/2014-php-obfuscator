## PHP Code Obfuscator with Real-Time Watch Mode (PHP, Bash, 2014-2016)

A custom two-way obfuscation toolchain: strips comments/whitespace, 
renames variables and functions to randomized tokens, maintains a 
reversible dictionary for de-obfuscation, and packages the result 
for deployment.

Includes a real-time mode (`rto.sh`) using `inotifywait` to trigger 
re-obfuscation automatically on file changes — an early automation/
watch-mode workflow, years before this became a common dev-tooling 
pattern.

Note: example obfuscated output omitted — the original use case 
involved production business logic not suitable for public sharing.
