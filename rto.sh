#!/bin/sh

# ...

while inotifywait -qq -e modify -e create --exclude '(\.swp|doc/)' -r ../../; do
  php ./obf.php uk > /dev/null;
done

# ...
