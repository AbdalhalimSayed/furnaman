<?php
    $title="أمان";
    include("include/header.php");
?>  

    <div class="container " >
        <p class="description text-right ">
        شركة أمان هي شركة متخصصة في فك وتركيب الأثاث بمدينة الرياض. نسعى دائمًا لتقديم خدمات عالية الجودة تلبي احتياجات عملائنا بكفاءة واحترافية. 

        نفخر بفريق عمل مدرب ومؤهل يتميز بالخبرة والمهارة في التعامل مع مختلف أنواع الأثاث بمهنية وحرفية عالية. كما نهتم بتقديم خدمة سريعة وفعالة تضمن راحة العملاء ورضاهم.  

        تتميز شركة أمان بالالتزام بالمواعيد والدقة في التنفيذ، مع مراعاة أعلى معايير الأمان والحفاظ على الأثاث من أي ضرر أثناء عملية النقل والتركيب.

        إذا كنت تبحث عن شركة موثوقة ومحترفة لفك وتركيب الأثاث في الرياض، فإن شركة أمان هي الخيار الأمثل لضمان راحتك وثقتك في كل خطوة.
        لا تتردد في الأتصال بنا 
        <a href="tel:+966 53 953 7579">أضغط هنا</a>
        </p>
    </div>
    <div class="container my-5">
        <div id="imageSlider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#imageSlider" data-slide-to="0" class="active"></li>
                <li data-target="#imageSlider" data-slide-to="1"></li>
            </ul>
            
            <!-- Slides -->
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <img src="image/photo1.jpg" class="d-block w-100 " alt="Slide 1">
                    <!-- You can add content overlay or captions here if needed -->
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="image/Designer (21).jpeg" class="d-block w-100 " alt="Slide 2">
                    <!-- You can add content overlay or captions here if needed -->
                </div>
            </div>
            
            <!-- Next/Prev controls -->
            <a class="carousel-control-prev" href="#imageSlider" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#imageSlider" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php
    include ("services.php");
    include ("employe.php");
    include ("about.php");
    include ("advices.php");
    include ("contact.php");
    include("include/footer.php");
?>  
