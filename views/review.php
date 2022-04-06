<!DOCTYPE html>
<html lang="en>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="20"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/d05f99dbac.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/review.css">
        <script src="jquery-3.5.1.min.js"></script>
        <link rel="icon" href="public/favicon.ico" sizes="any">
        <title>Jungle</title>
        <script> 
            $(function(){
                $('.dropdown').hover(function() {
                    $(this).addClass('open');
                },
                function() {
                    $(this).removeClass('open');
                });
            });
        </script>
    </head>

    <body>
        <div class="container">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div>
                    <label for="product">Product:</label>
                    <select name="product">
                    <option value="iPhone13Pro">iPhone 13 Pro</option>
                    <option value="iPhone13">iPhone 13</option>
                    <option value="iPhoneSE">iPhone SE</option>
                    <option value="GalaxyS22Ultra">Galaxy S22 Ultra</option>
                    <option value="GalaxyS22">Galaxy S22</option>
                    <option value="GalaxyZFlip35G">Galaxy Z Flip3 5G</option>
                    <option value="MagSafeCharger">MagSafe Charger</option>
                    <option value="SamsungGalaxySmartTag">Samsung Galaxy SmartTag</option>
                    <option value="BelkinBOOSTCharger">Belkin BOOST Charger</option>
                    </select> 
                    <div class="rate">
                        <input type="radio" id="star5" name="rate" value="5" />
                        <label for="star5" title="text">5 stars</label>
                        <input type="radio" id="star4" name="rate" value="4" />
                        <label for="star4" title="text">4 stars</label>
                        <input type="radio" id="star3" name="rate" value="3" />
                        <label for="star3" title="text">3 stars</label>
                        <input type="radio" id="star2" name="rate" value="2" />
                        <label for="star2" title="text">2 stars</label>
                        <input type="radio" id="star1" name="rate" value="1" />
                        <label for="star1" title="text">1 star</label>
                    </div>
                </div>
                <textarea style="height:200px;" id="review" name="review" placeholder="How was your experience with the product?"></textarea>
                <button  onClick="window.location.reload();" class="btn btn-secondary" style="display:block; margin-left: auto; margin-right: auto; border-radius:20px; color:black;" role="button" type="submit">Submit</button>
                <input type="submit"/>
            </form>
        </div>
    </body>
</html>