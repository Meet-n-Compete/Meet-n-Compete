<?php
include 'header.php';


if(isset($_POST['post'])){
    $post = new Post($con,$userLogin);
    $post->submitPost($_POST['post_text'], 'none');
    header("Location: Account.php");
}

?>
    <div class="account_wrapper">
        <div class="user_details column">
            <a href="<?php echo $userLogin; ?>" class="user_profile_image"> <img src="<?php echo $user['profile_picture'] ?>"></a>

            <div class="user_details_left_right">


                <a href=" <?php echo $userLogin; ?>">
                    <?php
                    echo "Hello, " . $user['first_name'] . " " . $user['last_name'] . "<br>";

                    ?>
                </a>
                <br>

                <?php
                echo "Number of Post(s): ". $user['num_posts'] . "<br>";
                echo "Past Events: " . $user['past_events'] . "<br>";
                echo "Current Events: " . $user['current_events'];
                ?>
            </div>

        </div>
        <div class="main_column_new_feed column">
            <form class="post_form" action="Account.php" method="POST">
                <textarea name="post_text" id="post_text" placeholder="What are you thinking...? "></textarea>
                <input type="submit" name="post" id="post_button" value="Post">
                <hr>
            </form>

            <div class="posts_area"></div>
            <img id="loading" src="img/loading.gif">

        </div>

        <script>
            $(function(){

                var userLogin = '<?php echo $userLogin; ?>';
                var inProgress = false;

                loadPosts(); //Load first posts

                $(window).scroll(function() {
                    var bottomElement = $(".status_post").last();
                    var noMorePosts = $('.posts_area').find('.noMorePosts').val();

                    // isElementInViewport uses getBoundingClientRect(), which requires the HTML DOM object, not the jQuery object. The jQuery equivalent is using [0] as shown below.
                    if (isElementInView(bottomElement[0]) && noMorePosts == 'false') {

                        loadPosts();
                    }
                });

                function loadPosts() {
                    if(inProgress) { //If it is already in the process of loading some posts, just return
                        return;
                    }

                    inProgress = true;
                    $('#loading').show();
                    setTimeout(function () {
                        var page = $('.posts_area').find('.nextPage').val() || 1; //If .nextPage couldn't be found, it must not be on the page yet (it must be the first time loading posts), so use the value '1'

                        $.ajax({
                            url: "Ajax_load_posts.php",
                            type: "POST",
                            data: "page=" + page + "&userLogin=" + userLogin,
                            cache:false,

                            success: function(response) {
                                $('.posts_area').find('.nextPage').remove(); //Removes current .nextpage
                                $('.posts_area').find('.noMorePosts').remove(); //Removes current .nextpage
                                $('.posts_area').find('.noMorePostsText').remove(); //Removes current .nextpage

                                $('#loading').hide();
                                $(".posts_area").append(response);

                                inProgress = false;
                            }
                        });
                    },500);

                }

                //Check if the element is in view
                function isElementInView (el) {
                    var rect = el.getBoundingClientRect();

                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && //* or $(window).height()
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth) //* or $(window).width()
                    );
                }
            });

        </script>


    </div>
    </body>
    </html>


<?php include 'footer.php'?>