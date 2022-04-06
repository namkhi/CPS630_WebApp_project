<?php 
header("Content-type: text/css");
?>
:root {
  --color-gray: #737888;
  --color-lighter-gray: #e3e5ed;
  --color-light-gray: #f7f7fa;
}

*,
*:before,
*:after {
  box-sizing: inherit;
}

html {
 
  font-size: 14px;
  box-sizing: border-box;
}


body {
  margin: 0;
}

h1 {
  margin-bottom: 1rem;
}

p {
  color: var(--color-gray);
}

hr {
  height: 1px;
  width: 100%;
  background-color: var(--color-gray);
  border: 0;
  margin: 2rem 0;
}

.container {
  max-width: 40rem;
  padding: 10vw 2rem 0;
  margin: 0 auto;
  height: 100vh;
}

.form {
  display: grid;
  grid-gap: 1rem;
}

.field {
  width: 100%;
  display: flex;
  flex-direction: column;
  border: 1px solid black;
  padding: .5rem;
  border-radius: .25rem;
}

.field__label {
  color: black;
  font-size: 0.8rem;
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 0.25rem
}

.field__input {
  padding: 0;
  margin: 0;
  border: 0;
  outline: 0;
  font-weight: bold;
  font-size: 1rem;
  width: 100%;
  -webkit-appearance: none;
  appearance: none;
  background-color: transparent;
}
.field:focus-within {
  border-color: #000;
}

.fields {
  display: grid;
  grid-gap: 1rem;
}
.fields--2 {
  grid-template-columns: 1fr 1fr;
}
.fields--3 {
  grid-template-columns: 1fr 1fr 1fr;
}

.button {
  background-color: #000;
  text-transform: uppercase;
  font-size: 0.8rem;
  font-weight: 600;
  display: block;
  color: #fff;
  width: 100%;
  padding: 1rem;
  border-radius: 0.25rem;
  border: 0;
  cursor: pointer;
  outline: 0;
}
.button:focus-visible {
  background-color: #333;
}

body {
    font-family: "open-sans", sans-serif;
    background-color: rgb(65, 103, 206,0.3);
    margin-top: 100px;
    min-width: 500px;
}
.logo{
    width: 100%;
    height: 100%;
    max-width: 100%;
    align-self: left;
}
ul {
    max-height: 7vh;
    list-style-type: none;
    margin: 0;
    padding: 0;
    background-color: rgb(65, 103, 206);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    border: 1px solid white;
}

li {
    float: left;
    border-right: 1px solid #bbb;
    width: 100%;
}
  
li a {
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    text-align: center;
    height: 100%;
    text-decoration: none;
}

li a:hover {
background-color: rgb(13, 56, 148);
}

li:last-child {
border-right: none;
}

.details{
padding: 1.4rem;
}

#dropdownMenuButton{
  max-height: 7vh;
  list-style-type: none;
  background-color: rgb(65, 103, 206);
  position: absolute;
  top: 10px;
  height: 100%;
  display: flex;
  padding: 5% 0px 0px 5%;
  font-size: 1rem;
  outline: none;
  border: none;
  position: static;
  top: 0;
  padding: 0;
  text-align: center;
  line-height: 7vh;
  display: flex;
  margin-left:auto;
  margin-right:auto;
}

.dropdown {
  text-align: center;
  justify-content: center;
  align-items: center;
  display: flex;
  height: 100%;
  
}

.dropdown:hover .dropdown-menu {
  display: block;
}