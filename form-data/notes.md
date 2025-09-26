# Form data

Finally something interesting.

Form data is handled via the method attribute on the `form` HTML element.

```
<form action="" method="">
<!-- Elements -->
</form>
```

## GET
- form data gets appended to the URL
  - this has a limit of about 2000 characters
- data is available in the PHP $_GET superglobal.

## POST
- data gets appended in the body of the HTTP request
- no size limits
- file upload possible thourgh the `<input type='file'>`
- data available in the PHP_$POST or $_FILE variables.


