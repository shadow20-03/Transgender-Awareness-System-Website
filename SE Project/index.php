<!DOCTYPE html>
<html>

<head>
    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: darkblue;
        }

        li {
            float: right;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: whitesmoke;
            color: black;
        }
    </style>
</head>

<body>
    <div>
        <p style="text-align:center;">
            <img src="images/logo trans.jpg" alt="Transgender Awareness" width="90px">
        </p>
        <p style="text-align:center;font-size:60px;color:goldenrod">
            <strong>Transgender Awareness</strong>
        </p>
    </div>
    <div>
        <ul>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="index.php"><strong>Home</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="atp.php"><strong>About Transgender People</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="issues.php"><strong>Issues</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="kyr.php"><strong>Know Your Rights</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;" class="active" href="login.php"><strong>Blog/Articles</strong></a></li>
            <li style="float: left;"><a style="text-decoration: underline;background-color:orange" class="active" href="aboutus.php"><strong>About Us</strong></a></li>
        </ul>
    </div>

    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 4</div>
            <img src="images/awareness week.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 4</div>
            <img src="images/tran 4.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 4</div>
            <img src="images/kineer.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="images/quotes.jpg" style="width:100%">
        </div>

        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
    </div>

    <div>
        <p class="body" style="margin-left: 3cm
        ;margin-right: 3cm;font-size: 25px">
            There are more than 4.88 lakh transgender persons in India. Transgender people come from various
            backgrounds. We are children, parents, and siblings. We are your neighbours, coworkers, and friends. We are
            7-year-old kids and grandparents in our 70s. We are a diverse community that includes people from various
            racial and ethnic backgrounds and religious traditions.
            <br>
            <br>
            <br>
            <br>
            Those whose gender identity differs from the sex assigned to us at birth are referred to as "transgender" or
            "trans" people. Despite the fact that the term "transgender" and our contemporary meaning of it were only
            coined in the latter half of the 20th century, individuals who meet this definition have existed across all
            known cultures.
            <br>
            <br>
            <br>
            <br>
            <strong>What does being trans mean?</strong>
            <br>
            <br>
            <br>
            The transgender population is extremely diverse. Others may identify as non-binary, genderqueer, gender
            non-conforming, agender, bigender, or other identities that represent their particular experiences. Some
            trans persons identify as trans men or trans women. As part of our transition, some of us take hormones or
            have surgery, while others may alter our pronouns or look. In a survey conducted by the HRC Foundation and
            the University of Connecticut, about three-quarters of trans kids identified as something other than simply
            "boy" or "girl." This indicates that more young people in this generation are identifying as as somewhere
            along the broad trans spectrum.
            <br>
            <br>
            <br>
            <br>
            <br>
            <strong style="font-size: large;text-align: center;">Some famous transgender personalities</strong>
        <table>
            <tr>
                <td><img src="images/gauri-sawant.jpg" alt="Gauri Sawant"></td>
                <td>
                    <p style="font-size: 25px;">
                        <strong>Gauri Sawant</strong> 
                        <br>
                        <br>
                        <br>
                        <br>
                        Sawant has made significant efforts to advance transgender rights. At the age of 18, she left
                        her house because she didn't want to let her father down. After years of hardship, she entered
                        activism and is now the director of the Sakshi Char Chowghi trust, which offers support and
                        guidance to HIV/AIDS patients and transgender persons. She participated in the legal action that
                        established transgender as a third gender as one of the petitioners. She is the Maharashtra
                        Election Commission's Goodwill Ambassador.
                    </p>
                </td>
            </tr>
            <tr>
                <td><img src="images/laxmi-narayan-tripathi.jpg" alt="Laxmi Narayan Tripathi" style="width: 670px;">
                </td>
                <td>
                    <p style="font-size: 25px;">
                        <strong>Laxmi Narayan Tripathi</strong>
                        <br>
                        <br>
                        <br>
                        <br>
                        Laxmi Narayan Tripathi, who was born a man, is one of the most well-known transsexual
                        individuals. She is an activist who performs Bharatnatyam dance and is presently located in
                        Mumbai. Tripathi's parents accepted her when she came out as a transgender woman, in contrast to
                        other parents who refuse to accept their children when they come out as trans people. In 2008,
                        she was the first transgender person to represent Asia and the Pacific at the UN. Before
                        founding her own organisation, Astitva, in 2007, that focuses on empowering sexual minorities,
                        she worked with a number of NGOs. Laxmi has also appeared as a special guest on reality TV shows
                        and has never shied away from an opportunity to advocate for the LGBTQ+ community.
                    </p>
                </td>
            </tr>
        </table>
        </p>

    </div>

    <script>
        let slideIndex = 0;
        showSlides();

        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 5000);
        }
    </script>
</body>

</html>