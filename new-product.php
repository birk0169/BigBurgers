
            <h2>New Product</h2>
            <form class="row" action="assets/addProduct.php" method="post">
                <!--Sets Heading/Product name-->
                <div class="col-md-12 form-group">
                    <label for="heading">Heading</label>
                    <input class="form-control" id="heading" type="text" name="heading" placeholder="Heading here..." required>
                </div>
                <!--Sets Content-->
                <div class="col-md-12 form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control rounded-1" id="exampleFormControlTextarea1 content" rows="5" type="textarea" name="content" placeholder="Content here..." required></textarea>
                    <!--<input class="form-control" id="content" type="textarea" name="content" placeholder="Content here..." required>-->
                    
                </div>
                <!--Sets Category-->
                <div class="col-md-6 form-group">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" type="text" name="category" placeholder="Select category" required>
                        <!--Gets all categories from the database -->
                        <?php 
                        require "assets/getCategories.php";
                        ?>
                    </select>
                </div>
                <!--Sets AuthorId -->
                <!-- <div class="col-md-6 form-group">
                    <label for="authorId">Author</label>
                    <input class="form-control" id="authorId" type="number" name="authorId" placeholder="AuthorId here..." required>
                </div> -->
                <!--Sets Image source -->
                <div class="col-md-6 form-group">
                    <label for="imgSrc">Image Source</label>
                    <input class="form-control" id="imgSrc" type="text" name="imgSrc" placeholder="ImgSrc here..." required>
                </div>
                <!--Sets Image Alt text -->
                <div class="col-md-6 form-group">
                    <label for="imgAlt">Image Alt text</label>
                    <input class="form-control" id="imgAlt" type="text" name="imgAlt" placeholder="ImgAlt here..." required>
                </div>
                <!--Sets Price -->
                <div class="col-md-6 form-group">
                    <label for="price">Price</label>
                    <input class="form-control" id="price" type="number" name="price" placeholder="price here..." required>
                </div>
                <!--Posts -->
                <div class="col-md-6 form-group d-flex">
                    <input class="btn btn-primary btn-large mt-auto" type="submit" value="Add">
                </div>
            </form>