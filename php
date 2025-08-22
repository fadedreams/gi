# PHP-specific ignores
vendor/
composer.lock
*.lock
*.log
*.cache

# Files specified by user
tree.txt
all.txt

# Common ignores for build systems and editors
*.o
*.bak
*.swp
*~

# IDE and editor files
.idea/
.vscode/
*.code-workspace

# macOS-specific
.DS_Store

# Environment files
.env
.env.local
.env.development
.env.test
.env.production
.env.example

# Laravel-specific (if applicable)
storage/*.key
/storage/*.log
/public/storage
/public/hot
/bootstrap/cache/
Homestead.yaml
Homestead.json

# PHPUnit
.phpunit.result.cache

# Build output
build/
dist/

# Temporary files
*.tmp
*.temp
