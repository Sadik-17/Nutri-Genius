<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nutri-Genius</title>
    <link rel="stylesheet" href="format.css">
    
</head>
<body>
    <div class="main-container">
        <div class="belt"></div>
                <header>
                    <h1>Nutri-Genius</h1>
                </header>
                <nav>
                    <a href="home.php">Home</a>
                    <a href="recipe.php">Recipes</a>
                    <a href="workout.php">Workout</a>
                    <a href="yoga.php">Yoga</a>
                    <div class="favorite">
                        <i class="fas fa-heart"></i>
                        <span>Favorite</span>
                    </div>
                </nav>
        <div class="main-content">
            <div class="left">
                <main>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe.webp" alt="Recipe Image">
                        <div class="description">
                            
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe2.webp" alt="Recipe Image">
                        <div class="description">     
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe3.webp" alt="Recipe Image">
                        <div class="description">   
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe3.webp" alt="Recipe Image">
                        <div class="description">
                            
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe.webp" alt="Recipe Image">
                        <div class="description">     
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe2.webp" alt="Recipe Image">
                        <div class="description">   
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe3.webp" alt="Recipe Image">
                        <div class="description">   
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe3.webp" alt="Recipe Image">
                        <div class="description">
                            
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    <div class="recipe">
                        <h3>Recipe Title</h3>
                        <img src="Images/recipe.webp" alt="Recipe Image">
                        <div class="description">     
                            <p>Short description of the recipe.</p>
                        </div>
                    </div>
                    
                </main>
            </div>
        
            <div class="right">
                <div id="sidebar" class="col-md-4">
                    <!-- search box -->
                    <div class="search-box-container">
                        <form class="search-post" action="search.php" method ="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search for Recipes ...">
                                <span class="input-group-btn">
                                    <button type="submit" class="search-post-btn" ></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="recent">
                            <!-- <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"> -->
                               <!--  <img src="admin/upload/<?php echo $row['post_img']; ?>" alt=""/> -->
                            </a>
                            <div class="post-content">
                                <h5><!-- <a href="single.php?id=<?php echo $row['post_id']; ?>"><?php echo $row['title']; ?></a></h5> -->
                                <span>
                                    <i class="fa fa-tags" aria-hidden="true"></i>
                                    <!-- <a href='category.php?cid=<?php echo $row['category']; ?>'><?php echo $row['category_name']; ?></a> -->
                                </span>
                                <span>
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <!-- <?php echo $row['post_date']; ?> -->
                                </span>
                                <!-- <a class="read-more" href="single.php?id=<?php echo $row['post_id']; ?>">read more</a> -->
                            </div>
                    </div>
                </div>
            </div>
        </div>
                <footer>
                    <p>Copyright &copy; 2024 Nutri-Genius</p>
                </footer>
    </div>
 </body>
</html>


