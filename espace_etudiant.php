
<!DOCTYPE html>
<html>
  <head>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">


    <title>ISI - Kef</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="République Tunisienne – Ministère de l'Enseignement Supérieur et de la Recherche Scientifique. Institut Supérieur d'Informatique du Kef.">
    <link rel="icon" href="images/icon.jpg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
           
.cours{
    height: 125vh;
    width: 100%;
    padding: 0 10%;
}

.courses-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-top: 40px;
}

.section-title {
  padding-top: 140px;
  font-size: 40px;
  font-family: 'Helvetica Neue', sans-serif;
  text-transform: uppercase;
  letter-spacing: 2px;
  text-align: center;
  color: #555;
  margin-bottom: 20px;
}

.course-box {
    width: 28%;
    background-color: #f1f1f1;
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 20px;
    overflow: hidden;
    position: relative;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

.course-image {
    height: 150px;
    overflow: hidden;
    margin-bottom:20px;
}

.course-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    
}

.course-details {
    padding: 10px;
}

.course-title {
    margin-top: 0;
    margin-bottom: 25px;
    font-size: 22px;
    text-align: center;
}


.course-link {
    display: inline-block;
    padding: 5px 10px;
    background-color: #ff0000;
    color: white;
    border-radius: 5px;
    text-decoration: none;
    transition: all 0.3s ease-in-out;
 


}

.course-box:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    transform: translateY(-5px);
}

.course-link:hover {
    background-color: #ff0000;
}


    </style>
  </head>
<body>
<nav>


      <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
      </div>
      <div class="navbar">
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="news.html">Nos Actualités</a></li>
         
     
          <li >
            <a href="biblio.html" >Notre Bibliothèque</a>
            </li>
                   
          <li class="dropdown">
            <a href="#" class="dropbtn">Vie Estudiantine<i class="fas fa-angle-down"></i></a>
              <div class="dropdown-content">
                <a href="activitéCulturelles.html">Activités Culturelles</a>
                <a href="activitéSportives.html" >Activités Sportives</a>
              </div>
          </li>
     
         
        </ul>
      </div>
     
      <div class="buttons-container">
      
        <a href="logout.php" class="btn btn-login"><i class="fa-solid fa-right-from-bracket"></i></a>
        
      </div>
      
      
    </nav>


    
<section class="cours" >
<div class="section-title">
        <h5>Aperçu du cours</h5>
    </div>
    <div class="courses-container">
   
  <div class="course-box">
    <div class="course-image">
      <img src="https://uploads-ssl.webflow.com/5fe22d5483f21c0a223357f8/5fef37dfbc9ac22fb2a855d3_Webp.net-resizeimage.png" alt="Cours de PHP">
    </div>
    <div class="course-details">
      <h5 class="course-title">cours de PHP</h5>
      
      <a href="cours.php" class="course-link" >Accéder au cours</a>
    </div>
  </div>
  <div class="course-box">
    <div class="course-image">
      <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAT4AAACfCAMAAABX0UX9AAABp1BMVEUWITQWITMUHi8VIDIVHzEWIDMTHC3/Lh/+//4SHCwAIDUQGCYRGigSHCsAITUSGiqHJi7yLCEAFybbIBkAFSGVJisPFiPYIBkArMHnIhoJGC4AGSjoIhoAHS+5o/Ht7+9VW2bkKyNrHSUAAACuJykWGy8WFzPsLCKCyYUABCSHGx4XFSoWFjNvv8wFAB7dKyS+HxyiHR0tN0YUYTwQrUgXADEAABNYmKTFKSalJykLDy9jXIkfGCRgGR95Gh3OIBsXDSUTdD8WDTMWKjVJIzK+KSgqIjNmsb13zdoAABpMg4+nqK5+gYpiJC9tcXpEdIH/ngA1N1Rgk2lBU2IAACwAESnKzM9WXGdzGyFTGCAFm7AVOjcVSzkRVWcVOTcSiUIRm0UMeYw9IjInQE86YnB/3OiZm6IoMULY19s7QlBDIzJhZnAlJzJ5TRqmaBthRSjmjAfSgRFDNi6HWCS+dhhsSik4MS+ci85EYFtKcVhQTXNgi3J4t4BqYpF/c6tsoXhNamhFalRTdGuPgL7Grv8OZXcJiZwUUjoSQ1UTfkARp0cPxkwUXTyaUv5iAAAUBklEQVR4nO2ci18TVxbHk5lMICMZzGQA8xis6GB4xQQUBHk/DJAIC0gKKj4ARXRb293ttuuudnfbWt32j977nPcrdVoMzK8fIcmdScmXc+45595ziURChQoVKlSoUKFChQoVKlSoUKFChQoVKlSoUKFChQoVKlSoUKFChQoVKlSoUKFChQoVKlQoowReOOkfoXkl8OM3F/mT/imaVALfk2ppaVmKhAB/g/jFawAeBNgRenCj4rklAO7SIj8Ovl29EwKMcLqvHhL4Dmh5O4Aaf/smeHht/4x7sFLkikokW4wUPS8lk944NjmWv3MJPLsinGWAysFypXIwuj5UqXjx41/ASe/mbRWXwJ9vOeNTYLFysDI8VBkrjo4dKm4XCuwVOOnd4Vn9i8IVPAW63Heq4RaH+pTRseXD4sDh6oDLdQIytPMWFvz+DHh9xvE2fvxaj4H46dJKpXi0OnT4dItbd8XHQyvjbawMR5MOWxMjk+UJxxdue7svth3j+jiuL9a3vR3gOxcPl4eGlldXV59WlisHLrMfxNeS6rFaHwrA9vhwhnj1hOMLl63W68PPtvqqx9vVSLVeDYwfN1AZW18dGi4eXF5dHToYGutzvBTggyyuGWs1Aad/KTt8fIRkiA5u/8dp+PJatfbs6HntuF57dvkosPctVg6LK8tjl5efgn8gelScowfAt4Mi7xKnj7y4+LDBJwgoQzwvCFEaXwQ26qHAPphB27VqtXpUX6tVa7XhevWzbFBvDOPGyvJ68enTocuV1YGiy/THQwPCU1kHzfsWL2GcVnyCgDNEAA9KwPHltuDF7/dgmH1ZL35eHa1Xj6rV4e3iZ8+PfFUIPqQcLh8dVYZGDyvDB5Why4fLiuM7Q3wCwDJOp0Ceu0md2YKP38cZooqLFe7gKfAEAGY/r7+s1kef1Uer9ZW12lrdX4HlRwMHleWxsbHR0ZVlEEPGlJjjlRgfDRXXXvDjWigx4cPOesnorNiZwXt4enDgALdf1iLH2eHPssfH2aNa7SjA0KtcrqyPLS9XnlZWx9aLLr8Wio/6rK56M+ETejAns6ERqvu++AUIMPrniW0uBgJwBH7d/uLLLwKb/OD0Vyxyy+uV0eLhmEfed54gIrWaVr0Z8YFnLamojZeCLBA5sC98wTHMfvlldCKbhabBcVn+1auvJgJ5XyRUdaw+PSq6xY2IAR8ECAOIWksQfJRSCieCFuvDGWIj+ILhOPHNV1//9S/ZiYkJ/i9//frrV18GaH0D65XDoQo3NAaiiPPMZ8JnfobwqZhSKENM9RgA4qBz9epvw/dx/LLbX3z1J6y/vbr76s8f9WYmFdfHDooKcN0D1xUDT3waKPCMJfGF5bB4fgenPJdarvCcjX5fflwWGN4337z6+8RENhKg7UEpAzH01ZVeg/gEAeeEPGKlyxCd8PkA+JFQs1k8/52MGsQX1dYCOZ5dwhkiy7ng80fQfO1JoPgtahAf+IA4UUndwev7PbzMsizCx/qSiRt4xQn4SeBoVI3h4zlIgKzG4AwRz4Gu1meShWgT83PDJ1itD39Wlke12k2FImsInw1AO4pNwc8FX9SAj+OR9REJ/FVgeuonbhCfE0Ajxmbg54wvqscHEenxQWDjfAzIjC/mU64TZNPwc8QX1ePjTPhiMRUfEsQn+wVnBqh7STXLZuHnhC+qx4fcTcVHgWF8DJQM8TF6+eHHqffrbyMIffNjE7nEie1ZOeCL6vHhyYrg0+zNYn2MBYWnGLM0u/THj5GOXr95HZGYYLGAQlpBi6SckoUljZPs8ekTZUIP41M/N7C3cc3erNbnF6T9tZxffuLGt91Q326IQZGDym5ubh5vgXKX29r6bnPzH478bPEZ6gxCT0b4WPqRDfhkD3yOiiPZAPTJT3zdTfU6SH4T/ywU/rm1taAcbG39q1B46LZVZMFnrjOQ7aFMb4kFAKm9UXxJGZa+PvDFnWTCpwIk/Bw/ZWIDGt6bW2+gCW4E6L/cXQBta2uLPdwCIDedFxJt8FnKNE5XZ3TwsgmfrKBlmNsJHzLTTCQIQDycTNryc/zhJYDt7aiYEEd/ABil4PBFst8VCt9vQRUKhQnnJQk/+Mia3h0eFbs9skzxgU8sy2hzZEdOoo+f9CRotrwEJUfuTSJ+jI6fIz5ofN+Owkfc6LfBml/k7veFwr8Bvc1C4T+9zpe54UM1L6euscisjIxwZl9OEHyyjDcuZVnjk3SRE8z29nYNv8Yvhs2P1iHmn118A6a8BH54q7v7TZCzn7JQKPxra+vf4Otdl8tc8OFEmazpsTwHJz0Zb0zKMsIno26Nm5OyCs2LnxFgOxZ+jEdlKAiPYYorfUYVTQFQfKuaXALEkLeBBt+JTRg9wBR4323B1BkfqjPOszfpmh6esGQZ2yLCh7o1dmVMxZWaqrY2dDV+0q6KDstloEXIL75dvdhq0MX6Z6ZmE1GSGFYUGYwvUOuLcBNg1vsviBtuxmdeY9Hw4TJtBq/pgXQZuxQCiDYm8c5Hy3k5l9DQ+BdApj5op0+SyVw+lWrpkZNMfNsED+mlaS83KTIbb9++ZiIwdhA/Dkq9/ylAuW++m9ZYVHyQHp+iC8scp+W3wMFQbwZa78vltA/foMBt586p5gdfAP9ymXweBKdEsvjMhl7rReOWdfLWDxFodtIomPq6pYALZJi8FP7hvvvpiI/FbWg3ObQsFVONDzhegnjwpckc/NyaCwIeRB7o1KvOnTPeQvElRp/b4Ws9NuwaSj/8uPH6x+43G2AS7L4VrPGB6PEQxg33fRQHfJx6UAFlD7riCtLLLaGuwHKuzQruI6THd9nOd1tbPzdED3YD2N7GBqo63gaZ9mHd3Sx855K0OOPTDirAkoNDhRo1PlnuwJ4L8BnBiUBGILkc/U4f2Uq9keJLOuEzdaElNn7slmDO130reHoRLvq9a9xwwEfb0HghglJXXObSwIHHSgifkcFuz87upCh2Qk0CiZ1TO5PgsSjhEYm8ji6Q4KNJdN/k1M7UIgYI8GVSPSAa+cMXAUGXFd/+cIsJNOpScR62Z4tPUA8q4HI3puFLyGRMNuMTO8fTGajSIuAnTuczmfJUOpOflqTOcjqPR6ROqSuTyZclSC8F7GxK7BT3S3nwKNW1A/mJGF/SL74Iy4L8RTyxBT8Lvh1hiRxUoHsSGj45gcfEXA7h01xVmuzKpLEyu4DSNHhWgk+mRXUkA0ak8Uw6MwPxQcAZQG8qj9hm8ujtjPjqtVrr83pr67PW57XaRVt8JyzT7gawLNKxrO3oqGtUeNIDmV57m2iwPmBuM5DPDPya7iL40hgfGcmgEWkxn07ngfuKSwBZWZT2ITxgfuBbCtgfxYfnvrV6da0OMhiutfrs+dEnji+K8OFmUf1+GMZHJr0rKNMj+EQCr1PcBVQyU6I4lYHfJYwv01Wa6dGP5MEIoJnZAYCBMcKnJWh5PZMvSvlMvsuMr1avA4KtrUcA38XIp40vSvClomjS03YTET510kskTfhQHNiFxRb0SWhr/QAfpAe+S9IUHBGxfcJX+oH3liUJUM2kJWkyjyh2SiKYFFO7IsHXTvAdr7XW+yIcwHf08tN2XrxERVamWB09gI/lGTzpycl2hK9dc95OHEdFSQQVaKdUSndhfF1pOMWBESw4gvAtZpATE4o7AF8XuFEUy8D8+k341kDuXAXWFwHW5xA6TljG3Q3aK78PAar4ZJ5MenIcJM0IX86ED1CaLuGZT8VXktSRrjSaCwE+ZJ/5ReC06TyKJJlMegYKOvO4CV8V4KuD0FFDXz9hfFrLDu6VXxLUjh8ZH1u4IsuJOMXXpuKj9Ha7SOA14wMjGB3FB+2uX4JPwZNyRqd8GeDLIHxxv4nLCcuML6prQUP06HFVmQHw4mhhSo+P8JtMQ28tT0/PpE340EgXGoGzYqf0AuY0u8h3Ib40DrxQKQ2fz6rjxGXBB5dacAsa7D3jZZIF4q0JgA9Nfm05U+joB1Y3A+e4kgkfHEmTEYQP5zgQ2y4xxRlcgKAihOCLfxr4bFa4TbLDx2mnPPCkh7eHID7qvTld3gcTlyVErVMfOroQPvNIJ0KGvFyEng3TQFindIriPkqbIT4wTfhaMvh9pcwq6J+b0KEsHT7aAaU75SHweMUlrvNeYn25XA7FVQRpCUTQF11dGj6R4gMj4iIe6cTem0a+C550wfRwXwSFbyk9KWr4Ru3xHf9x+Gb37l24cOHe3qzbRTye5kz0AD9ZPeVB1ww0703kJkF8yadpmVYSofOml/rLaQu+ccMIemmG1nYA3w7MqvOlpRLMYM61QXz5HjkeX6na0bvY5+BNSm/Q/c2zTy5gPZmFb+1ghOhMlXYqUt+AJ+C+ApY2U8Sp9+ZycG5sgUCwSqCwhSKvgFpMdV5pEnFD8aMrXUb4+rHv4mqvnEflMMQ2I7blKL72qB2+msPBK+XB3EKvu5s1KOX9hSc/3UP83s0qyuyew3X8bZzpCRZ8qKtFALbH6PkBeMgsVdsDKoni7gzCNFOGkUJEVQeyPjWlASPgC1pV2YeVHV1vEKfxekw+Xwa1NFzva4HOG98+qltsb83pXDJ3/8HI3H3P5aVG8P2kDAwQC7y3t/fuidPZItJ/gU5FGujZ4IP74rvo6p1+nWCtL06XS+VpcRI+nxR3wddpvPIHWJZLS9PSPhpBxOCjRbpcI4o75VJpqX8/19bWnuvo6BhfTMLGjfjK9rBBkRXnQ3+9I9H5EdctxUaFgq7qwfecz6TSw2zn6UqBAR9H8CF+CZmE5ByRiJSjS8YiXTkW9SvP+ImkLTkbRtvayHvBrTa0z5sAvyj0/6QtMKSH1e3DPvxZmZ8bDIzdwOwsOhCD48eFd+4ZDD1rqnYrq/h4tE1E8JGOjB45h7fG0Fq9frvHQ8aNIizdNl0ymURdL+D3RJoMkKKeTX4Q331FefBzQO47cPDk3bsnezBmKLMH799HZl3poWJXt8RMyl2ML0bxyfIO3iGHHRmodMObjecsSLz4tRuksgMpJW7SIPRIn6QvfAsfRnoH5x4EYn+zPxGPRfGWU1wcl+KDxS45Z2/Bh/gxMu7WiMvQQGD2p7IwoLHZj8RGZqRlRKixSyLzI/Q4Ss8OHzffi/4BC5nv7Z148LC398bISAD2p+xduEemvKjCcQPvvXIiUuySg+G8oMdH5j1ShyzCoBgnnSyGLW9A0bBb2e4oG3y0NwsZX1ztRoW/x6gDPk65PjK4cP3X+cjgw8dzcyOP5x6PfPgQRPQYeLcwSw3w/azy5Cev91Rbqlhtc9eAT530ZNTjmNCaWtoa6jDQX2xpG0rSDkCNHkfPcNngW7h+/caj/32Ymx/58HjhxqORG48ePbpx/+OzZy4aBbwG9i7QoDvrdYdactDWgtu8Hh9ZshqXaemL2GnNVLhjxdbCrENJ6qxJtcMKPo7ruic1euppQlt8j369Pvfo+o3HPz/49ReCbzCA4gNH2YH32IPvRT3fUlex8eofo6P4KNIYtDy0Ua72glIbdHZUrXfKZGumdjVDh64KzwPf4C8jcx+uj1yfm5v739zjx78AmnMLgRVvysDeExJ+/eOD563IH9PAzeB8DDu0TJqTGfRpDb2QbvSodVmaIo2tpgkTPEKPdcYX4QaV+cHe6Nzc44cKBx5N/Hp/PtDClwN1h8dpaBt8nPanXCA+0q0hM3p8OPhi7/PZ2qejl0zo2nLVnnHCjiFnY3D8d8FHPmPv4LyC3I0DRa/n+tzvIstyAfbXK6mWpavYk2NqazxyX2KBcdIZ6q1205VxqwHGaR8IQ02PZV2c9xOSER/e4EB/pIAuWcUY0qVBrMTOERviZ4NPhaej16z44HLVeAsp5GLUpTSAZjo479X+szisRYxF9H8S0+g1Lz50aDx1npfpeoFu2U89kKGn5zXjoevc+KkHtcjP4B55PyHZ4wMAeXrKVLM+xnieBVN0tLOk6SCHjpo+Xpiknkhtbnzq2WbGgA/lftaTLU4y8TM8NabJMbpKoD9R3rT4OD0+PT3GAMWDnhm1Kz7d//sU49OY+Yq7HvzUkKvZ/WnHp+bP5vLLNPfZDFpjLk33zhQ+6saW+c12WjTfqJ9OteWpM4PPQO+34TOkRGcZnxO9EN/H4YuH+FzwedIL8YX4vPQHOC9z9vCxAYYO840e+E5D0aaZnxc+78TFxvhMad9ZxOc3bbbzXcZofKcfX4yxYPAwvwamvphh1j0N+PSTXxD4rMZnwGc1vmbEZx87HPC58zsTvmvaqPQ5+ZnMz4afOmRrfC74msv4PgqfbtfICd7HGt9J4/FS1Ml7HWOHPoFL2AFMWOkxfo3PhO+k6XjKG5958rM3P3vZ3HKqjE9tUGsAn4P5udA7tcZnwcfZ4XM2P1eA9je40Ts9+FwmP5/8HOidJt+1nGhzWXRx4mcP0OliMz27XaImxufb/PRIPOD5Nb7mw+fHe33wMxDUv+xFz9Z3TwU+y5pfzIyF8VLclp6n8TUhvgbNzzyjudDTv2Km52p8zYDPr/cyJnze9meFxxjezGvma3Z87ubn8Ie/3QaN7+VJr6nw+TI/O35Wgg6vW+i5rlQ1Pz5Pfs5/TN0Gqju9JjU+01/ScMJnO/25AbR4s+nX4E2v2fB58rMxP3uAlmvs6Hm57inAp+V+OrdzB2iDTkXmSK9pjc/de/Xm58LPS7rbThs99+ARBL+YHb1TETewGsBnYNEIvNNLz2XN2YZfYwboAM+91m0yeq7mZ+DXoAHa3WbF1+z0XBZN3fh5EXS4ydv4ThpHo3INvjb8/AB0usOZXtPi8+DHufCzBRgzX254xfruze27dvi8+NkgshiZ7bXe9P4IfP8HLRCaAzC6P3gAAAAASUVORK5CYII=" alt="Cours laravel">
    </div>
    <div class="course-details">
      <h5 class="course-title">cours Laravel</h5>
   
      <a href="#" class="course-link">Accéder au cours</a>
    </div>
  </div>
  <div class="course-box">
    <div class="course-image">
      <img src="https://aitsrajampet.ac.in/images/pdf/ai/Artificial-Intelligence-and-Machine-Learning.png" alt="Cours AI">
    </div>
    <div class="course-details">
      <h5 class="course-title">Cours AI</h5>
     
      <a href="cours.php" class="course-link">Accéder au cours</a>
    </div>
    
  </div>
  

  <div class="course-box">
    <div class="course-image">
      <img src="https://pandorafms.com/blog/wp-content/uploads/2021/11/Data-Warehouse@72x-8.png" alt="Cours  entrepôt de données">
    </div>
    <div class="course-details">
      <h5 class="course-title">Cours  entrepôt de données</h5>

      <a href="cours.php" class="course-link">Accéder au cours</a>
    </div>
  </div>

  <div class="course-box">
    <div class="course-image">
      <img src="https://actualiteinformatique.fr/wp-content/uploads/2019/11/Base-donnee-relationelle.jpg" alt="Cours base">
    </div>
    <div class="course-details">
      <h5 class="course-title">Cours base de données</h5>

      <a href="cours.php" class="course-link">Accéder au cours</a>
    </div>
  </div>
  <div class="course-box">
    <div class="course-image">
      <img src="https://www.netoffensive.blog/wp-content/uploads/2020/01/moteur-de-recherche.jpg" alt="Cours indexation">
    </div>
    <div class="course-details">
      <h5 class="course-title">Cours Indexation</h5>

      <a href="cours.php" class="course-link">Accéder au cours</a>
    </div>
  </div>
</div>

</section>


<!--fotter-->
<footer class="footer">
  <div class="footer-container">
   <div class="footer-row">
     <div class="footer-col">
       <h4>company</h4>
       <ul>
         <li><a href="index.php">Accueil</a></li>
         <li><a href="actualité.html">Nos Actualités</a></li>
         <li><a href="avis.html">Service Estudiantins</a></li>
         <li><a href="biblio.html">Notre bibliothéque</a></li>
         <li><a href="activitéCulturelles.html">Vie Estudiantine</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>Liens utiles</h4>
       <ul>
         <li><a href="https://www5.inscription.tn/">Inscription</a></li>
         <li><a href="http://www.uj.rnu.tn/Ar/%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AC%D8%AF%D8%A7%D8%AA_46_4">Université jendouba</a></li>
         <li><a href="http://www.parcours-lmd.salima.tn/">Parcour LMD</a></li>
         <li><a href="https://www.ooun.rnu.tn/web/ar/index.php">Oeuvres universitaires</a></li>
         <li><a href="https://www.emploi.nat.tn/fo/Fr/global.php">emploi</a></li>
         <li><a href="http://www.cnudst.rnrt.tn/">CNUDST</a></li>
       </ul>
     </div>
     <div class="footer-col">
       <h4><i class="fa-sharp fa-solid fa-clock"></i> Temps de travail </h4>
       <ul>
        
         <li></li>
         <li>Lundi 7h30–18h30</li>
         <li>Mardi 7h30–18h30</li>
         <li>Mercredi 7h30–18h30</li>
         <li>Jeudi 7h30–18h30</li>
         <li>Vendredi 7h30–18h30</li>
         <li>Samedi 7h30–18h30</li>
         <li>Dimanche 9h–12h30</li>
       </ul>
     </div>
     <div class="footer-col">
       <h4>Contactez nous</h4>
       <div class="social-links">
         <a href="#"><i class="fab fa-facebook-f"></i></a>
         <a href="#"><i class="fab fa-twitter"></i></a>
         <a href="#"><i class="fab fa-instagram"></i></a>
         <a href="#"><i class="fab fa-linkedin-in"></i></a>
       </div>
     </div>
   </div>
  </div>
 
</footer>

<script src="js/scripts.js"></script>
</body>
</html>