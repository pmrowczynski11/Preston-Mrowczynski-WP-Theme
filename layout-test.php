<?php
// $url = 'http://localhost:8883/sample-page';
$url = 'http://localhost:8883/?p=6744';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        iframe {
            border: 1px solid #444;
            margin: 2rem 0 2rem 0;
        }

        iframe:first-child {
            margin: 2rem 0 2rem 1rem;
        }

        section > div {
            border: 1px solid #c8c6c6;
        }

        section div p {
            font-weight: bold;
        }

        section.mobile > div {
            display: flex;
            justify-content: space-around;
        }

        #mobile {
            height: 600px;
            width: 320px;
        }
        #mobile-landscape {
            height: 320px;
            width:600px;
        }
        #tablet {
            height: 1024px;
            width: 768px;
        }
        #tablet-landscape {
            height: 768px;
            width: 1024px;}
        #desktop {
            height: 1536px;
            width: 2048px;
        }

    </style>
</head>
<body>
    <section class="mobile">
        <h2>Mobile</h2>
        <div>    
            <div>
                <p>320px width X 600px height</p>
                <iframe id="mobile" src="<?php echo $url ?>"></iframe>
            </div>
            <div>
                <p>600px width X  320px height</p>
                <iframe id="mobile-landscape" src="<?php echo $url ?>"></iframe>
            </div>
        </div>
    </section>
    
    <section class="tablet">
        <h2>Tablet</h2>
        <div>
            <div>
                <p>768px width X 1024px height</p>
            <iframe id="tablet" src="<?php echo $url ?>"></iframe>
        </div>

            <div>
                <p>1024px width X 768px height</p>
            <iframe id="tablet-landscape" src="<?php echo $url ?>"></iframe>
        </div>
        </div>
    </section>

    <section class="desktop">
        <h2>Desktop</h2> 
        <div>
            <div>
                <p>2048px width X 1536px height</p>
                <iframe id="desktop" src="<?php echo $url ?>"></iframe></div>
            </div>
    </section>
    
   
</body>
</html>