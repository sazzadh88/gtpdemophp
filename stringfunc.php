trim()	Removes whitespace at beginning and end of a string.
ltrim()	Removes whitespace at the beginning of a string.
rtrim()	Removes whitespace at the end of a string.

htmlentities()	Escapes all HTML entities.
nl2br()	Inserts a <br /> tag before each newline character in a string.
strtoupper()	Converts a string to uppercase.
strtolower()	Converts a string to lowercase.
ucfirst()	Converts the first character of a string to uppercase.
ucwords()	Converts the first character of each word in a string to uppercase.

explode()	Splits a string into an array on a specified character or group of characters.
implode()	Converts an array into a string, placing a specified character or group of characters between each array element.
join()	Same as implode().


substr(str,pos)	Returns the substring from the character in position pos to the end of the string.
substr(str,-len)	Returns the substring from len characters from the end of the string to the end of the string.
substr(str,pos,len)	Returns a len length substring beginning with the character in position pos.
substr(str,pos,-len)	Returns a substring beginning with the character in position pos and chopping off the last len characters of the string.
strstr(haystack,needle,before_needle)	If the third argument (before_needle) is false (default), then it returns the part of the haystack from the needle on.If the third argument (before_needle) is true, then it returns the part of the haystack before the needle.The needle can be a string or an integer (or a number that can be converted to an integer).
stristr(haystack,needle,before_needle)	Same as strstr(), but case insensitive.
strpos(haystack,needle)	Finds the position of the first occurrence of a specified needle in a haystack (string).The needle can be a string or an integer (or a number that can be converted to an integer).
strrpos(haystack,needle)	Finds the position of the last occurrence of a specified needle in a haystack (string).The needle can be a string or an integer (or a number that can be converted to an integer).
str_replace()	Replaces all occurrences of one string with another string.



strcmp()	Compares two strings. Returns < 0 if str1 is less than str2, > 0 if str1 is greater than str2, and 0 if they are equal.
strcasecmp()	Like strcmp() but case insensitive.
strlen()	Returns the length of a string.




