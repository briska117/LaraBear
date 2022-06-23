<label for="name">Name</label>
    <input type="text" name="name" value="{{ isset($product->name)?$product->name:'' }}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" value="{{ isset($product->price)?$product->price:'' }}">
    <input type="submit" text="envuar">