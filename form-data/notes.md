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

## Form elements
### Text fields

`<input type="text" name="txt">`

Basic single-line text fields.

`<input type="password" name="pwd">`

The password input type looks like a text input but the characters typed in are obscured.

`<textarea name="area"> </textarea>`

Allows for multiple lines of text to be submitted.

### Radio buttons / checboxes

`<input type="checkbox" name="chb" value="on">`

Allows the user to select one or more items in a group.

`<input type="radio" name="group" value="option1">`

`<input type="radio" name="group" value="option2">`

Radio buttons allow the user to select ONE option in a gorup.

### Section lists

```
<select name="ddl">
<option value="item1">One</option>
<option value="item2">Two</option>
<option value="item3">Three</option>
</select>
```
A dropdown list of options. The user can select ONE.

