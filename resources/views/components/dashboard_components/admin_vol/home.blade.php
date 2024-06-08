@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet"  href="{{ url('./style.css') }}"/>
    <link rel="stylesheet" href="{{ url('./style2.css') }}" />
<style>
    body {  font-family: "Ubuntu", sans-serif;
  margin: 0;  background-color: hsl(229, 24%, 87%);}

button {  font-family: "Ubuntu", sans-serif;}

.container {  display: flex;  background-color: rgb(255, 255, 255);
  margin-top: 3%;  margin-left: auto;  margin-right: auto;
  border-radius: 10px;
    box-shadow: 20px 20px 20px rgba(47, 18, 18, 0.101);
  width: 1000px;  height: 568px;
}

.displayStep {  display: flex;  justify-content: center;
  width: 274px;  height: 568px;
  background-color: rgba(30, 16, 186, 0);
  background-image: url(image/bg-sidebar-desktop.svg);
}

.circle {  position: relative;
  background-color: rgba(220, 20, 60, 0);
  width: 20%;  color: white;  font-weight: 500;  height: 50%;
  margin-top: 15%;  display: flex;  flex-direction: column;
  justify-content: space-between;  align-items: center;
}
.circle p {  margin-top: 10px;}
.circle1 {  width: 40px;  height: 40px;
  border-radius: 20px;
  background-color: rgb(255, 255, 255);
  border: solid 1px white;  display: flex;
  justify-content: center;  color: black;
}
.circle2 {  width: 40px;  height: 40px;
  border-radius: 20px;  background-color: rgba(0, 0, 0, 0);
  border: solid 1px white;  display: flex;
  justify-content: center;
}
.circle3 {  width: 40px;  height: 40px;
  border-radius: 20px;
  background-color: rgba(0, 0, 0, 0);
  border: solid 1px white;  display: flex;
  justify-content: center;
}
.circle4 {  width: 40px;  height: 40px;
  border-radius: 20px;  background-color: rgba(0, 0, 0, 0);
  border: solid 1px white;  display: flex;
  justify-content: center;
}

.steps {  position: relative;
  background-color: rgba(255, 255, 0, 0);
  display: flex;  flex-direction: column;
  justify-content: space-between;  width: 60%;
  height: 50%;  margin-top: 15%;
  margin-left: 0%;
}

.step1 {  position: inherit;  padding-left: 5px;
  background-color: rgba(156, 55, 55, 0);
}

.steps p {  margin-bottom: 0px;
  margin-top: 0px;  font-size: 14px;
  color: hsl(231, 11%, 63%);
}

.steps span {  color: white;
}
.stepContainer {
  background-color: rgba(210, 96, 14, 0);
  width: 50%;  height: 550px;
  margin-top: auto;  margin-left: auto;
  margin-right: auto;  margin-bottom: auto;
}

#stepInfo {  display: flex;  flex-direction: column;}

#stepPlan {  display: none;  flex-direction: column;}

#stepAddOn {  display: none;  flex-direction: column;}

#stepSummary {  display: none;  flex-direction: column;}

#stepThankYou {  display: none;  flex-direction: column;
  align-items: center;  margin-top: 150px;}

#stepThankYou img {  width: 80px;}

#stepInfo input {  width: 100%;  height: 40px;
  border-radius: 5px;
  border: solid 1px rgba(103, 92, 92, 0.628);
}
.buttonContainerStepOne {  position: relative;
  background-color: rgba(0, 255, 51, 0);
  padding-left: 380px;  padding-top: 73px;}

.buttonContainerStepTwo {  display: flex;
  justify-content: space-between;
  background-color: rgba(0, 255, 51, 0);  padding-top: 75px;
}
.buttonContainerStepThree {
  display: flex;  justify-content: space-between;
  background-color: rgba(0, 255, 51, 0);  padding-top: 80px;
}
.buttonContainerStepFour {  display: flex;
  justify-content: space-between;
  background-color: rgba(0, 255, 51, 0);  padding-top: 39px;
}

.nextStep {  padding: 15px 20px 15px 20px;
  width: 120px;  background-color: hsl(213, 96%, 18%);
  color: white;  border-radius: 5px;
  border: solid 1px rgba(0, 0, 255, 0);
  cursor: pointer;  font-size: 16px;
}
.nextStep:hover {  background-color: hsla(243, 100%, 62%, 0.423);}

.addOnButton {  display: flex;  justify-content: space-between;
  align-items: center;  margin-top: 10px;
  border: solid 1px hsl(229, 24%, 87%);
  border-radius: 10px;  height: 80px;  padding: 0px 30px 0px 30px;
}
.addOnButton:hover {  border: solid 1px hsl(229, 77%, 52%);}
.addOnButton p {  margin-top: 2px;  margin-bottom: 2px;
  margin-left: 20px;  font-weight: bold;
}

.addOnButton span {  margin-left: 20px;  font-size: 15px;}

.regroup {  display: flex;}

.planMonth {  display: flex;  justify-content: space-between;}

.planButton {  display: flex;  flex-direction: column;
  border-radius: 10px;  width: 30%;  height: 200px;
  border: solid 1px hsl(229, 24%, 87%);
  background-color: white;  cursor: pointer;
}

.planButton:hover {  border: solid 1px hsl(213, 96%, 18%);}

.planButton img {  margin-top: 14px;  margin-left: 8px;}

.planButton p {  font-size: 18px;  margin-top: 50px;
  margin-left: 8px;  margin-bottom: 8px;}

.planButton span {  margin-left: 8px;  color: hsl(231, 11%, 63%);}

.free {  cursor: pointer;  margin-left: 8px;  font-size: 12px;}

#modeTotal {  color: hsl(231, 11%, 63%);}

.switch {  justify-content: center;  display: flex;
  width: 100%;  height: 56px;
  background-color: hsl(217, 100%, 97%);
  border-radius: 10px;  margin-top: 25px;}

.check {  display: inline-block;  position: relative;
  width: 40px;  height: 20px;  cursor: pointer;
  overflow: hidden;  margin-top: 15px;  margin-left: 10px;
  margin-right: 10px;}

.check input {  position: absolute;  top: -30px;
  left: -30px;  width: 0;  height: 0;}

.check input + span {  position: absolute;
  top: 0;  bottom: 0;  left: 0;
  right: 0;  background: hsl(213, 96%, 18%);
  border-radius: 20px;}

.check input:checked + span {  background: hsl(213, 96%, 18%);}

.check input + span:before {
  content: "";  display: inline-block;  position: absolute;
  top: 50%;  left: 4px;  width: 12px;
  height: 12px;  background: white;  border-radius: 50%;
  transform: translateY(-50%);  transition: all 0.5s;
}
.check input:checked + span:before {  left: 24px;}
.free {  margin-top: 10px;}

#planYear {  display: none;  justify-content: space-between;}
#addonAnnee {  display: none;  flex-direction: column;}
#addonMois {  flex-direction: column;}

#resumeYear {  display: none;  flex-direction: column;}

#resumeMonth {  display: flex;  flex-direction: column;}

.containerResume {  width: 80%;
  height: 15x0px;  background-color: hsl(229deg 28% 96%);
  padding: 1px 30px 10px 20px;  border-radius: 10px;
}
.containerResume button {  border: none;
  background-color: rgba(250, 235, 215, 0);
  text-decoration: underline;  cursor: pointer;
  padding-left: 0px;
}
.containerResume button:hover {  color: hsl(243, 100%, 62%);}
.containerResume h4 {  margin-bottom: 0px;}
.containerResume span {  display: block;  margin-top: 0px;
  height: 1px;  background-color: hsl(231deg 18% 88%);}

.flexResume {  display: flex;  justify-content: space-between;}
.flexResume label {  display: flex;  align-items: center;}
.flexTotal {  display: flex;  justify-content: space-between;
  align-items: center;  padding: 0px 0px 0px 0px;
  margin: 15px 0px 0px 0px;  width: 80%;
  padding: 1px 20px 10px 20px;  border-radius: 10px;}
.flexTotal span {  font-size: 20px;  color: hsl(243, 100%, 62%);}

.stepAddOn input:checked {  color: blue;}

.goBack {  border: none;  cursor: pointer;
  background-color: rgba(255, 255, 255, 0);
  font-size: 16px;  color: hsl(231, 11%, 63%);}

.dollar {  margin-left: -239px;}
.underMedia {  flex-direction: column;}
#errorName {  color: red;  font-size: 12px;}
#errorNum {  color: red;  font-size: 12px;}
#errorMail {  color: red;  font-size: 12px;}
.flexError {  display: flex;  text-align: center;
  justify-content: space-between;
}

.flexError span {  padding-top: 19px;}
@media (max-width: 1000px) {
  .container {    display: flex;
    flex-direction: column; background-color: hsl(227, 36%, 90%);
    margin-top: 3%;    margin-left: auto;
    margin-right: auto;
    box-shadow: 20px 20px 20px rgba(47, 18, 18, 0.101);
    width: 375px;    height: 680px;  }

  .displayStep {    display: flex;    justify-content: center;
    width: 100%;    height: 172px;
    background-color: rgba(30, 16, 186, 0);
    background-image: url(image/bg-sidebar-mobile.svg);
    border-radius: 10px;
  }

  .stepContainer {    background-color: rgb(255, 255, 255);
    width: 250px;    height: 500px;
    position: absolute;    margin-top: 90px;
    margin-left: 45px;    margin-right: auto;
    margin-bottom: auto;    border-radius: 10px;    padding: 20px;
  }
  .buttonContainerStepOne {    position: relative;
    background-color: rgba(0, 255, 51, 0);
    padding-left: 130px;    padding-top: 39px;
  }
  .buttonContainerStepTwo {    display: flex;
    justify-content: space-between;
    background-color: rgba(0, 255, 51, 0);    padding-top: 25px;
  }
  .buttonContainerStepThree {    display: flex;
    justify-content: space-between;
    background-color: rgba(0, 255, 51, 0);    padding-top: 58px;
  }
  .buttonContainerStepFour {
    display: flex;    justify-content: space-between;
    background-color: rgba(0, 255, 51, 0);    padding-bottom: 39px;
  }

  .steps {    display: none;  }
  .circle {    position: relative;    width: 50%;    color: white;
    font-weight: 500;    height: 2%;    display: flex;
    flex-direction: row;
  }
  .circle p {    margin-top: 5px;  }
  .circle1 {    width: 30px;    height: 30px;
    border-radius: 20px;    background-color: rgb(255, 255, 255);
    border: solid 1px white;    display: flex;
    justify-content: center;    color: black;
  }
  .circle2 {    width: 30px;    height: 30px;
    border-radius: 20px;    background-color: rgba(0, 0, 0, 0);
    border: solid 1px white;    display: flex;
    justify-content: center;
  }
  .circle3 {    width: 30px; height: 30px;    border-radius: 20px;
    background-color: rgba(0, 0, 0, 0);
    border: solid 1px white;    display: flex;
    justify-content: center;
  }
  .circle4 {    width: 30px;    height: 30px;  border-radius: 20px;
    background-color: rgba(0, 0, 0, 0);  border: solid 1px white;
    display: flex;    justify-content: center;
  }
  #stepInfo {    display: flex;    flex-direction: column;  }

  .stepInfo h1 {    margin-top: 0;  }

  #stepInfo input {width: 100%; height: 40px;
    border-radius: 5px;
        border: solid 1px rgba(103, 92, 92, 0.628);
  }
  #stepPlan {    display: none;    flex-direction: column;  }
  .planMonth {    display: flex;    justify-content: space-between;
    flex-direction: column;  }
  .stepPlan h1 {    margin-top: 0;  }
  .stepAddOn h1 {    margin-top: 0;    margin-left: 30px;  }
  .stepSummary h1 {    margin-top: 0;    margin-left: 37px;  }
  .descrition {    margin-top: 0;  }
  .planButton {    display: flex;    flex-direction: row;
    border-radius: 10px;    width: 100%;
    height: 66px;    border: solid 1px hsl(229, 24%, 87%);
    background-color: white;    margin-top: 10px;
    cursor: pointer;  }
  .planButton p {    font-size: 16px;    margin-top: 4px;
    margin-left: 8px;    margin-bottom: 0px;  }

  .planButton span {    cursor: pointer;    margin-left: 57px;
    font-size: 12px;    margin-top: 23px;    position: absolute;  }
  .underMedia {    flex-direction: column;  }
  .free {   cursor: pointer;    margin-left: 57px;
    font-size: 12px;    margin-top: 41px;    position: absolute;  }
  .addOnButton {    display: flex;  justify-content: space-between;
    align-items: center;    margin-top: 10px;
    border: solid 1px hsl(229, 24%, 87%); border-radius: 10px;
    height: 73px;    padding: 0px 7px 0px 2px;  }
  .addOnButton p {    margin-left: 11px;  }
  .addOnButton span {    margin-left: 12px;    font-size: 11px;  }
  .prix {    padding-right: 0px;    font-size: 12px;
      font-weight: normal;  }
  .AddSize {    padding-top: 0px;    font-weight: bold;
    font-size: 13px;  }
  .containerResume {    width: 80%;
    height: 15x0px;    background-color: hsl(229deg 28% 96%);
    padding: 1px 20px 10px 20px;
    border-radius: 10px;
  }
  .containerResume button {
    border: none;    background-color: rgba(250, 235, 215, 0);
    text-decoration: underline;    cursor: pointer;
    padding-left: 0px;
  }
  .containerResume button:hover {    color: hsl(243, 100%, 62%);  }
  .containerResume h4 {    margin-bottom: 0px;  }
  .containerResume span {    display: block;
    margin-top: -7px;    height: 1px;
    background-color: hsl(231deg 18% 88%);
  }
  .containerResume {    width: 80%;    height: 15x0px;
    background-color: hsl(229deg 28% 96%);
    padding: 1px 30px 10px 20px;    border-radius: 10px;
  }
  .flexTotal {
    display: flex;    justify-content: space-between;
    align-items: center;
    /* padding: 0px 0px 0px 0px; */
    /* margin: 26px 27px 4px 0px; */
    /* width: 80%; */
    padding: -31px -1px 21px 17px;
    /* border-radius: 10px;*/
  }
  .flexTotal span {    font-size: 20px; color: hsl(243, 100%, 62%);
    margin-right: -4px;  }
  .flexResume p {    font-size: 12px;  }
  .flexResume label {    font-size: 14px;  }
  #totalPrice {    margin-left: -210px;  }

  
}

</style>
  </head>
  <body>
    <div class="container" id="container">
      <div class="displayStep" id="displayStep">
        <div class="circle">
          <div class="circle1" id="circle1"><p>1</p></div>
          <div class="circle2" id="circle2"><p>2</p></div>
          <div class="circle3" id="circle3"><p>3</p></div>
          <div class="circle4" id="circle4"><p>4</p></div>
        </div>
        <div class="steps">
          <div class="step1">
            <p>STEP 1</p>
            <span>YOUR INFO</span>
          </div>
          <div class="step1">
            <p>STEP 2</p>
            <span>SELECT PLAN</span>
          </div>
          <div class="step1">
            <p>STEP 3</p>
            <span>ADD-ONS</span>
          </div>
          <div class="step1">
            <p>STEP 4</p>
            <span>SUMMARY</span>
          </div>
        </div>
      </div>
      <div class="stepContainer" id="stepContainer">
        <!--PERSO INFOS -------------------------------------------------------------------->
        <div class="affichStep">
          <div class="stepInfo" id="stepInfo">
            <h1>Personal Info</h1>
            <p class="descrition">
              Please provide vour name, email address, and phone number.
            </p>
            <div class="flexError">
              <p>Name</p>
              <span id="errorName"></span>
            </div>
            <input
              type="text"
              name=""
              id="infoName"
              placeholder="e.g. Stephen king"
            />
            <div class="flexError">
              <p>Email Address</p>
              <span id="errorMail"></span>
            </div>
            <input
              type="text"
              name=""
              id="infoMail"
              placeholder="e.g. stephenking@lorem.com"
            />
            <div class="flexError">
              <p>PhoneNumber</p>
              <span id="errorNum"></span>
            </div>
            <input
              type="text"
              name=""
              id="infoNumber"
              placeholder="e.g. +1 234 567 890"
            />
            <div class="buttonContainerStepOne">
              <button onclick="goStepTwo()" class="nextStep">Next Step</button>
            </div>
          </div>
          <!--SELECT PLAN ------------------------------------------------------------------------>
          <div class="stepPlan" id="stepPlan">
            <h1>Select your plan</h1>
            <p class="descrition">
              You have the option of monthly or yearly billing.
            </p>
            <div class="planMonth" id="planMonth">
              <button class="planButton" id="moisArcade" onclick="getPrice1()">
                <img src="./image/icon-arcade.svg" alt="" />

                <p>Arcade</p>
                <span id="priceMonth" class="priceMonth">9$/mo</span>
              </button>

              <button
                class="planButton"
                id="moisAdvenced"
                onclick="getPrice2()"
              >
                <img src="./image/icon-advanced.svg" alt="" />

                <p>Advenced</p>
                <span id="priceMonth" class="priceMonth">12$/mo</span>
              </button>

              <button class="planButton" id="moisPro" onclick="getPrice3()">
                <img src="./image/icon-pro.svg" alt="" />

                <p>Pro</p>
                <span id="priceMonth" class="priceMonth">15$/mo</span>
              </button>
            </div>
            <div class="planMonth" id="planYear">
              <button class="planButton" id="anneeArcade" onclick="getPrice4()">
                <img src="./image/icon-arcade.svg" alt="" />

                <p>Arcade</p>
                <span class="priceYear">90$/yr</span>
                <label class="free">2 months free</label>
              </button>

              <button
                class="planButton"
                id="anneeAdvenced"
                onclick="getPrice5()"
              >
                <img src="./image/icon-advanced.svg" alt="" />

                <p>Advenced</p>
                <span class="priceYear">120$/yr</span>
                <label class="free">2 months free</label>
              </button>

              <button class="planButton" id="anneePro" onclick="getPrice6()">
                <img src="./image/icon-pro.svg" alt="" />

                <p>Pro</p>
                <span class="priceYear">150$/yr</span>
                <label class="free">2 months free</label>
              </button>
            </div>

            <div class="switch">
              <p class="monthly">Monthly</p>
              <label class="check"
                ><input
                  type="checkbox"
                  id="switch"
                  id="checkbox"
                  onclick="reset()" />
                <span></span
              ></label>

              <p class="yearly">Yearly</p>
            </div>

            <div class="buttonContainerStepTwo">
              <button onclick="backStepOne()" class="goBack">Go back</button>
              <button onclick="goStepThree()" class="nextStep">
                Next Step
              </button>
            </div>
          </div>
          <!--ADD ON---------------------------------------------------------------------------------->
          <div class="stepAddOn" id="stepAddOn">
            <h1>Pick add-ons</h1>
            <p class="descrition">
              Add-ons help enhance your gaming experience.
            </p>
            <!--bouton mois ------------------------------------------------------------------->
            <div id="addonMois">
              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    id="onlineMois"
                    name="adOnn"
                    value="1"
                  />

                  <div class="addOn">
                    <p class="AddSize">Online service</p>
                    <span>Access to multiplayer games</span>
                  </div>
                </div>
                <p class="prix">+$1/mo</p>
              </div>

              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    name="adOnn"
                    value="2"
                    id="storageMois"
                  />
                  <div class="addOn">
                    <p class="AddSize">Larger storage</p>
                    <span> 1TB of cloud save</span>
                  </div>
                </div>
                <p class="prix">+$2/mo</p>
              </div>

              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    name="adOnn"
                    value="2"
                    id="customizableMois"
                  />
                  <div class="addOn">
                    <p class="AddSize">Customizable profile</p>
                    <span>Custom theme on your profile</span>
                  </div>
                </div>
                <p class="prix">+$2/mo</p>
              </div>
            </div>
            <!--bouton année -------------------------------------------------------------------->
            <div id="addonAnnee">
              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    name="adOnn"
                    value="10"
                    id="onlineAnnee"
                  />

                  <div class="addOn">
                    <p class="AddSize">Online service</p>
                    <span>Access to multiplayer games</span>
                  </div>
                </div>
                <p class="prix">+$10/yr</p>
              </div>

              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    name="adOnn"
                    value="20"
                    id="storageAnnee"
                  />
                  <div class="addOn">
                    <p class="AddSize">Larger storage</p>
                    <span> 1TB of cloud save</span>
                  </div>
                </div>
                <p class="prix">+$20/yr</p>
              </div>

              <div class="addOnButton">
                <div class="regroup">
                  <input
                    type="checkbox"
                    name="adOnn"
                    value="20"
                    id="customizableAnnee"
                  />
                  <div class="addOn">
                    <p class="AddSize">Customizable profile</p>
                    <span>Custom theme on your profile</span>
                  </div>
                </div>
                <p class="prix">+$20/yr</p>
              </div>
            </div>

            <div class="buttonContainerStepThree">
              <button onclick="backSteptTwo()" class="goBack">Go back</button>

              <button onclick="goStepFour()" class="nextStep">Next Step</button>
            </div>
          </div>
          <!--RESUME---------------------------------------------------------------------------------->
          <div class="stepSummary" id="stepSummary">
            <h1>Finishing up</h1>
            <p class="descrition">
              Double-check everything looks OK before confirming.
            </p>
            <div class="resume">
              <div class="containerResume">
                <div
                  id="resumeMonth"
                  
                  <div class="flexResume">
                    <div>
                      <h4 id="modeResume">Choose a plan</h4>
                      <button onclick="goFromFourToTwo()">Change</button>
                    </div>
                    <label for="" id="priceResume"></label>
                  </div>
                  <br />
                  <span></span>
                  <div class="flexResume">
                    <p>Online service</p>
                    <label for="" id="onlinePrice">+0$</label>
                  </div>
                  <div class="flexResume">
                    <p>Larger storage</p>
                    <label for="" id="storagePrice">+0$</label>
                  </div>
                  <div class="flexResume">
                    <p>Customizable profile</p>
                    <label for="" id="customizablePrice">+0$</label>
                  </div>
                </div>
              </div>
              <div class="flexTotal">
                <p id="modeTotal">Total</p>
                <span id="totalPrice"></span>
                <span class="dollar">$</span>
              </div>
              <div class="buttonContainerStepFour">
                <button onclick="backStepThree()" class="goBack">
                  Go back
                </button>
                <button onclick="goToStepThankYou()" class="nextStep">
                  Confirm
                </button>
              </div>
            </div>
          </div>
          <!--THANK YOU------------------------------------------------------------------------------>
          <div class="stepThankYou" id="stepThankYou">
            <img src="./image/icon-thank-you.svg" alt="" />
            <h1>Thank you!</h1>
            <p>
              Thanks for confirming your subscription! We hope you have fun
              using our platform. If you ever need support, please feel free to
              email us at support@loremgaming.com.
            </p>
          </div>
        </div>
      </div>
    </div>

<script>
    function goStepTwo() {
  checkName();
  checkNum();
  checkMail();
  Achieve();
}

function backStepOne() {
  stepInfo.style.display = "flex";
  stepPlan.style.display = "none";
  circle1.style.color = "black";
  circle1.style.backgroundColor = "rgba(255, 255, 255)";
  circle2.style.backgroundColor = "rgb(255, 255, 255, 0)";
  circle2.style.color = "white";
}

function goStepThree() {
  console.log(typeof document.getElementById("totalPrice").innerHTML);

  if (document.getElementById("totalPrice").innerHTML == "") {
    console.log(document.getElementById("totalPrice").innerHTML);
    document.getElementById("totalPrice").innerHTML = "0";
    console.log(document.getElementById("totalPrice").innerHTML);
  }
  checkPlan();
}
function backSteptTwo() {
  stepPlan.style.display = "flex";
  stepAddOn.style.display = "none";
  circle2.style.color = "black";
  circle2.style.backgroundColor = "rgba(255, 255, 255)";
  circle3.style.backgroundColor = "rgb(255, 255, 255, 0)";
  circle3.style.color = "white";
}

function goStepFour() {
  stepSummary.style.display = "flex";
  stepAddOn.style.display = "none";
  circle3.style.color = "white";
  circle3.style.backgroundColor = "rgba(255, 255, 255, 0)";
  circle4.style.backgroundColor = "rgb(255, 255, 255)";
  circle4.style.color = "black";

  const adOnnPrice = document.getElementsByName("adOnn").forEach(radio => {
    if (radio.checked) {
      console.log(radio.value);
      console.log(document.getElementById("totalPrice").innerHTML);
      const planPrice = document.getElementById("totalPrice").innerHTML;
      console.log(planPrice);
      document.getElementById("totalPrice").innerHTML =
        parseInt(planPrice) + parseInt(radio.value);
    }
  });
}

function backStepThree() {
  stepSummary.style.display = "none";
  stepAddOn.style.display = "flex";
  circle3.style.color = "black";
  circle3.style.backgroundColor = "rgba(255, 255, 255)";
  circle4.style.backgroundColor = "rgb(255, 255, 255, 0)";
  circle4.style.color = "white";

  const adOnnPrice = document.getElementsByName("adOnn").forEach(radio => {
    if (radio.checked) {
      console.log(radio.value);
      console.log(document.getElementById("totalPrice").innerHTML);
      const planPrice = document.getElementById("totalPrice").innerHTML;
      console.log(planPrice);
      document.getElementById("totalPrice").innerHTML =
        parseInt(planPrice) - parseInt(radio.value);
    }
  });
}

function goFromFourToTwo() {
  stepSummary.style.display = "none";
  stepPlan.style.display = "flex";
  circle2.style.color = "black";
  circle2.style.backgroundColor = "rgba(255, 255, 255)";
  circle4.style.backgroundColor = "rgb(255, 255, 255, 0)";
  circle4.style.color = "white";

  const adOnnPrice = document.getElementsByName("adOnn").forEach(radio => {
    if (radio.checked) {
      console.log(radio.value);
      console.log(document.getElementById("totalPrice").innerHTML);
      const planPrice = document.getElementById("totalPrice").innerHTML;
      console.log(planPrice);
      document.getElementById("totalPrice").innerHTML =
        parseInt(planPrice) - parseInt(radio.value);
    }
  });
}
function goToStepThankYou() {
  console.log(document.getElementById("modeResume").innerHTML);
  if (document.getElementById("modeResume").innerHTML == "Choose a plan") {
    stepSummary.style.display = "flex";
    stepThankYou.style.display = "none";
  } else {
    stepSummary.style.display = "none";
    stepThankYou.style.display = "flex";
  }
}

/*fonction pour checker si le checkbox est checké pour display plan<year */

checkBox = document
  .getElementById("switch")
  .addEventListener("click", event => {
    if (event.target.checked) {
      planYear.style.display = "flex";
      planMonth.style.display = "none";
      addonAnnee.style.display = "flex";
      addonMois.style.display = "none";
    } else {
      planYear.style.display = "none";
      planMonth.style.display = "flex";
      addonAnnee.style.display = "none";
      addonMois.style.display = "flex";
    }
  });
/*fonction pour changer couler des bouton PLAN et choper les infos */
checkBox = document
  .getElementById("moisArcade")
  .addEventListener("click", event => {
    moisArcade.style.backgroundColor = "hsl(217, 100%, 97%)";
    moisArcade.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisAdvenced.style.backgroundColor = "white";
    moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisPro.style.backgroundColor = "white";
    moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeArcade.style.backgroundColor = "white";
    anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeAdvenced.style.backgroundColor = "white";
    anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneePro.style.backgroundColor = "white";
    anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Arcade (monthly)";
    document.getElementById("priceResume").innerHTML = "9$/mo";
    document.getElementById("modeTotal").innerHTML = "Total (per month)";
  });
checkBox = document
  .getElementById("moisAdvenced")
  .addEventListener("click", event => {
    moisAdvenced.style.backgroundColor = "hsl(217, 100%, 97%)";
    moisAdvenced.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisArcade.style.backgroundColor = "white";
    moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisPro.style.backgroundColor = "white";
    moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeArcade.style.backgroundColor = "white";
    anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeAdvenced.style.backgroundColor = "white";
    anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneePro.style.backgroundColor = "white";
    anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Advenced (monthly)";
    document.getElementById("priceResume").innerHTML = "12$/mo";
    document.getElementById("modeTotal").innerHTML = "Total (per month)";
  });
checkBox = document
  .getElementById("moisPro")
  .addEventListener("click", event => {
    moisPro.style.backgroundColor = "hsl(217, 100%, 97%)";
    moisPro.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisAdvenced.style.backgroundColor = "white";
    moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisArcade.style.backgroundColor = "white";
    moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeArcade.style.backgroundColor = "white";
    anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeAdvenced.style.backgroundColor = "white";
    anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneePro.style.backgroundColor = "white";
    anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Pro (monthly)";
    document.getElementById("priceResume").innerHTML = "15$/mo";
    document.getElementById("modeTotal").innerHTML = "Total (per month)";
  });
checkBox = document
  .getElementById("anneeArcade")
  .addEventListener("click", event => {
    anneeArcade.style.backgroundColor = "hsl(217, 100%, 97%)";
    anneeArcade.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisArcade.style.backgroundColor = "white";
    moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisPro.style.backgroundColor = "white";
    moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisAdvenced.style.backgroundColor = "white";
    moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeAdvenced.style.backgroundColor = "white";
    anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneePro.style.backgroundColor = "white";
    anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Arcade (yearly)";
    document.getElementById("priceResume").innerHTML = "90$/yr";
    document.getElementById("modeTotal").innerHTML = "Total (per year)";
  });
checkBox = document
  .getElementById("anneeAdvenced")
  .addEventListener("click", event => {
    anneeAdvenced.style.backgroundColor = "hsl(217, 100%, 97%)";
    anneeAdvenced.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisAdvenced.style.backgroundColor = "white";
    moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisPro.style.backgroundColor = "white";
    moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisArcade.style.backgroundColor = "white";
    moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeArcade.style.backgroundColor = "white";
    anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneePro.style.backgroundColor = "white";
    anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Advenced (yearly)";
    document.getElementById("priceResume").innerHTML = "12O$/yr";
    document.getElementById("modeTotal").innerHTML = "Total (per year)";
  });
checkBox = document
  .getElementById("anneePro")
  .addEventListener("click", event => {
    anneePro.style.backgroundColor = "hsl(217, 100%, 97%)";
    anneePro.style.border = " solid 1px hsl(213, 96%, 18%)";
    /*res les autres background et borders */
    moisArcade.style.backgroundColor = "white";
    moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisPro.style.backgroundColor = "white";
    moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
    moisAdvenced.style.backgroundColor = "white";
    moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeArcade.style.backgroundColor = "white";
    anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
    anneeAdvenced.style.backgroundColor = "white";
    anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
    /* la suite */
    document.getElementById("modeResume").innerHTML = "Pro (yearly)";
    document.getElementById("priceResume").innerHTML = "150$/yr";
    document.getElementById("modeTotal").innerHTML = "Total (per year)";
  });

/*fonction pour chopper les infos des ADD ONS */

checkBox = document
  .getElementById("onlineMois")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("onlinePrice").innerHTML = "+1$/mo";
      document.getElementById("modeTotal").innerHTML = "Total (per month)";
    } else {
      document.getElementById("onlinePrice").innerHTML = "+0$";
    }
  });
checkBox = document
  .getElementById("storageMois")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("storagePrice").innerHTML = "+2$/mo";
      document.getElementById("modeTotal").innerHTML = "Total (per month)";
    } else {
      document.getElementById("storagePrice").innerHTML = "+0$";
    }
  });
checkBox = document
  .getElementById("customizableMois")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("customizablePrice").innerHTML = "+2$/mo";
      document.getElementById("modeTotal").innerHTML = "Total (per month)";
    } else {
      document.getElementById("customizablePrice").innerHTML = "+0$";
    }
  });
checkBox = document
  .getElementById("onlineAnnee")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("onlinePrice").innerHTML = "+10$/yr";
      document.getElementById("modeTotal").innerHTML = "Total (per year)";
    } else {
      document.getElementById("onlinePrice").innerHTML = "+0$";
    }
  });
checkBox = document
  .getElementById("storageAnnee")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("storagePrice").innerHTML = "+20$/yr";
      document.getElementById("modeTotal").innerHTML = "Total (per year)";
    } else {
      document.getElementById("storagePrice").innerHTML = "+0$";
    }
  });
checkBox = document
  .getElementById("customizableAnnee")
  .addEventListener("click", event => {
    if (event.target.checked) {
      document.getElementById("customizablePrice").innerHTML = "+20$/yr";
      document.getElementById("modeTotal").innerHTML = "Total (per year)";
    } else {
      document.getElementById("customizablePrice").innerHTML = "+0$";
    }
  });
function reset() {
  document.getElementById("onlineMois").checked = false;
  document.getElementById("storageMois").checked = false;
  document.getElementById("customizableMois").checked = false;
  document.getElementById("onlineAnnee").checked = false;
  document.getElementById("storageAnnee").checked = false;
  document.getElementById("customizableAnnee").checked = false;
  document.getElementById("onlinePrice").innerHTML = "+0$";
  document.getElementById("storagePrice").innerHTML = "+0$";
  document.getElementById("customizablePrice").innerHTML = "+0$";
  document.getElementById("onlinePrice").innerHTML = "+0$";
  document.getElementById("storagePrice").innerHTML = "+0$";
  document.getElementById("customizablePrice").innerHTML = "+0$";
  document.getElementById("modeResume").innerHTML = "Choose a plan";
  document.getElementById("priceResume").innerHTML = "0$";
  moisArcade.style.backgroundColor = "white";
  moisArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
  moisPro.style.backgroundColor = "white";
  moisPro.style.border = " solid 1px hsl(229, 24%, 87%)";
  moisAdvenced.style.backgroundColor = "white";
  moisAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
  anneeArcade.style.backgroundColor = "white";
  anneeArcade.style.border = " solid 1px hsl(229, 24%, 87%)";
  anneeAdvenced.style.backgroundColor = "white";
  anneeAdvenced.style.border = " solid 1px hsl(229, 24%, 87%)";
  anneePro.style.backgroundColor = "white";
  anneePro.style.border = " solid 1px hsl(229, 24%, 87%)";
}

/* FONCTION POUR FAIRE LE TOTAL*/

const planPrice = "0";
console.log(planPrice);

function getPrice1() {
  const planPrice = "9";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}

function getPrice2() {
  const planPrice = "12";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}
function getPrice3() {
  const planPrice = "15";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}
function getPrice4() {
  const planPrice = "90";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}
function getPrice5() {
  const planPrice = "120";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}
function getPrice6() {
  const planPrice = "150";
  console.log(planPrice);
  document.getElementById("totalPrice").innerHTML = planPrice;
}

/* check des inputs INFOS */

function checkName() {
  let myNameInput = document.getElementById("infoName");
  let myNameError = document.getElementById("errorName");
  let myNameRegex = /^[a-zA-Z-\s]+$/;

  if (myNameInput.value.trim() == "") {
    myNameError.innerHTML = "This field is required";
  } else if (myNameRegex.test(myNameInput.value) == false) {
    myNameError.innerHTML = "Can't contain numbers or symbols";
  } else if (myNameInput.value.trim() !== "") {
    myNameError.innerHTML = "";
  }
}

function checkNum() {
  let myNumInput = document.getElementById("infoNumber");
  let myNumError = document.getElementById("errorNum");
  let myNumRegex = /^[0-9\s]+$/;

  if (myNumInput.value.trim() == "") {
    myNumError.innerHTML = "This field is required";
  } else if (myNumRegex.test(myNumInput.value) == false) {
    myNumError.innerHTML = "Must contain number";
  } else if (myNumInput.value.trim().length !== 10) {
    myNumError.innerHTML = "Invalid Phone Number";
  } else {
    myNumError.innerHTML = "";
  }
}

function checkMail() {
  let myMailInput = document.getElementById("infoMail");
  let myNumError = document.getElementById("errorMail");
  let myMailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (myMailInput.value.trim() == "") {
    myNumError.innerHTML = "This field is required";
  } else if (myMailRegex.test(myMailInput.value) == false) {
    myNumError.innerHTML = "Please enter a valid e-mail";
  } else {
    myNumError.innerHTML = "";
  }
}

function Achieve() {
  let myNumInput = document.getElementById("infoNumber");
  let myNameInput = document.getElementById("infoName");
  let myMailInput = document.getElementById("infoMail");
  let myNameRegex = /^[a-zA-Z-\s]+$/;
  let myNumRegex = /^[0-9\s]+$/;
  let myMailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (
    myNumInput.value.trim().length === 10 &&
    myNumRegex.test(myNumInput.value) == true &&
    myMailInput.value.trim().length !== 0 &&
    myMailRegex.test(myMailInput.value) === true &&
    myNameInput.value.trim().length !== 0 &&
    myNameRegex.test(myNameInput.value) === true
  ) {
    stepInfo.style.display = "none";
    stepPlan.style.display = "flex";
    circle1.style.color = "white";
    circle1.style.backgroundColor = "rgba(255, 255, 255, 0)";
    circle2.style.backgroundColor = "rgb(255, 255, 255)";
    circle2.style.color = "black";
  }
}
function checkPlan() {
  if (document.getElementById("modeResume").innerHTML == "Choose a plan") {
    stepInfo.style.display = "none";
    stepPlan.style.display = "flex";
    circle1.style.color = "white";
    circle1.style.backgroundColor = "rgba(255, 255, 255, 0)";
    circle2.style.backgroundColor = "rgb(255, 255, 255)";
    circle2.style.color = "black";
  } else {
    stepPlan.style.display = "none";
    stepAddOn.style.display = "flex";
    circle2.style.color = "white";
    circle2.style.backgroundColor = "rgba(255, 255, 255, 0)";
    circle3.style.backgroundColor = "rgb(255, 255, 255)";
    circle3.style.color = "black";
  }
}
</script>
  </body>
</html>

@endsection
