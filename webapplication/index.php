<?php
    $name = '';
    if (isset($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <cmodulus require="seshaUI.web"/>
</head>
<body>

    <@cmodulus 
        seshaUI app = new seshaUI();
        app.title = 'Web Application';
        
        // app.icon = '';
        
        echo '<h4>What\'s your name?</h4>';
        history.pushState(null, null, "/webapplication/");
    @>

    <form action="">
        <input type="text" name="name" id="name"/>
        <input type="submit" id="btn" value="OK"/>
    </form>

    <p id='title'></p>

    <@cmodulus
        def('name::placeholder', 'name here...');

        string name = "<?php echo $name?>";
        if name != '' {
            app.request('name').value = name;
            app.request('title').innerText = string.Format('Hi, {0}', name);
        }
    @>

</body>
</html>