<div class="col-md-12">
    <div class="filters row">
        <div class="col-md-4">
            <h3>trending now</h3>
            <ul>
                <li><a href="#">Bohemian</a></li>
                <li><a href="#">Floral</a></li>
                <li><a href="#">Lace</a></li>
                <li><a href="#">Floral</a></li>
                <li><a href="#">Lace</a></li>
                <li><a href="#">Bohemian</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Size</h3>
            <div class="input-group">
                <input type="checkbox" id="xxs" name="chk-boxes"><label for="xxs">XXS</label>
                <input type="checkbox" id="xs" name="chk-boxes"><label for="xs">XS</label>
                <input type="checkbox" id="s" name="chk-boxes"><label for="s">S</label>
                <input type="checkbox" id="m" name="chk-boxes"><label for="m">M</label>
                <input type="checkbox" id="l" name="chk-boxes"><label for="l">L</label>
                <input type="checkbox" id="xl" name="chk-boxes"><label for="xl">XL</label>
                <input type="checkbox" id="xxl" name="chk-boxes"><label for="xxl">XXL</label>
            </div>
        </div>
        <div class="col-md-4">
            <h3>Price</h3>
            <input type="text" id="price" name="price" value=""/>
        </div>
    </div>
</div>

<div class="sort col-md-12">
    <div class="input-group">
        <span class="input-group-addon" id="sort-by">Sort By</span>
        <select size="5" class="selectpicker show-tick" name="sortby" id="sort-by-select"
                data-width="fit">
            <option selected>Name</option>
            <option>Price Asc</option>
            <option>Price Desc</option>
            <option>Time (New First)</option>
            <option>Sales First</option>
        </select>
    </div>
    <div class="input-group">
        <span class="input-group-addon" id="show-me">Show</span>
        <select size="5" class="selectpicker show-tick" name="showme" id="show-me-select"
                data-width="fit">
            <option>06</option>
            <option selected>09</option>
            <option>12</option>
            <option>18</option>
            <option>24</option>
        </select>
    </div>
</div>