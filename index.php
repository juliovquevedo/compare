<!doctype htlm>
<html>
    <head>
        <title>Compare Deals</title>
        <meta charset="utf-8"/>
    </head>
    <body>
        <main>
            <form oninput="y.value=parseInt(discount.value)">
                <fieldset>
                    <legend>Buy One get One...</legend>
                    <label>Item Price</label>
                    <input type="text"><br>
                    <label>Buy</label>
                    <input type="number" value="1"><br>
                    <label>Get One</label>
                    <input name="discount" type="range" min="0" max="100">
                    <output name="y" for="discount"></output>
                    <label>% Off</label>
                </fieldset>
                <fieldset>
                    <legend>Percent discount</legend>
                    <label>Item Price</label>
                    <input type="text"><br>
                    <label>Discount</label>
                    <input type="number">
                </fieldset>
                <input type="submit" value="Compare">
            </form>
        </main>
    </body>
</html>