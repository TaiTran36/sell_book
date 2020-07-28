<section class="search-books">
    <div class="container">
        <form class="form-search-book">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <input name="s" value="" type="text" class="form-control" id="keyword" placeholder="Book Title">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <select name="product_cat" id="product_cat" class="form-control">
                            <option value="0">Book Category</option>
                            <option class="level-0" value="drama">Drama</option>
                            <option class="level-1" value="inspiration">&nbsp;&nbsp;&nbsp;Inspiration</option>
                            <option class="level-1" value="love-story">&nbsp;&nbsp;&nbsp;Love Story</option>
                            <option class="level-0" value="life-style">Life Style</option>
                            <option class="level-1" value="business">&nbsp;&nbsp;&nbsp;Business</option>
                            <option class="level-1" value="culture">&nbsp;&nbsp;&nbsp;Culture</option>
                            <option class="level-0" value="science">Science</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <select name="book_author" id="book_author" class="form-control">
                            <option value="0">Book Author</option>
                            <option class="level-0" value="atkia">Atkia</option>
                            <option class="level-0" value="brian-owell">Brian O’Well</option>
                            <option class="level-0" value="saifudin-a">Saifudin A.</option>
                            <option class="level-0" value="sarfaraz">Sarfaraz</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group">
                        <input type="hidden" name="post_type" value="product">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fa fa-search"></i> &nbsp;
                            Find Book
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
