<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Jaber's Blogs</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600&family=Manrope:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
:root {
  --barney-start: #8e2de2; --barney-stop: #4a00e0; --barney-bg-color: #250070; --barney-focus: #ff5fa2;
  --slate-start: #606c88;  --slate-stop: #3f4c6b;  --slate-bg-color: #2a3248;  --slate-focus: #ffc329;
  --candy-start: #009fff;  --candy-stop: #ec2f4b;  --candy-bg-color: #00293d;  --candy-focus: #4cc6ff;
  --firewatch-start: #ef473a; --firewatch-stop: #cb2d3e; --firewatch-bg-color: #6e0f09; --firewatch-focus: #ffb199;
  --citrus-start: #fdc012; --citrus-stop: #f37335; --citrus-bg-color: #8f3f08; --citrus-focus: #ffe142;
  --marsh-start: #8dc26f;  --marsh-stop: #4f9a3a;  --marsh-bg-color: #2f5420;  --marsh-focus: #b6f58a;
  --frost-start: #004e92;  --frost-stop: #000d7a;  --frost-bg-color: #00052d;  --frost-focus: #4cc6ff;

  --bg-color: var(--barney-bg-color);
  --start: var(--barney-start);
  --stop: var(--barney-stop);
  --focus: var(--barney-focus);
  --text: rgba(255, 255, 255, 0.92);
  --muted: rgba(255, 255, 255, 0.68);
  --field-bg: rgba(0, 0, 0, 0.32);
  --field-bg-focus: rgba(0, 0, 0, 0.55);
  --error: #ffd0d0;
}

* { box-sizing: border-box; }

body {
  margin: 0;
  min-height: 100vh;
  padding: 24px 16px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  font-family: "Manrope", system-ui, sans-serif;
  color: var(--text);
  background-color: var(--bg-color);
  background-image:
    radial-gradient(900px 500px at 15% -10%, color-mix(in srgb, var(--start) 45%, transparent), transparent 70%),
    radial-gradient(700px 500px at 100% 110%, color-mix(in srgb, var(--stop) 55%, transparent), transparent 70%);
  transition: background-color 300ms ease-in-out;
}

body.barney    { --bg-color: var(--barney-bg-color);    --start: var(--barney-start);    --stop: var(--barney-stop);    --focus: var(--barney-focus); }
body.slate     { --bg-color: var(--slate-bg-color);     --start: var(--slate-start);     --stop: var(--slate-stop);     --focus: var(--slate-focus); }
body.candy     { --bg-color: var(--candy-bg-color);     --start: var(--candy-start);     --stop: var(--candy-stop);     --focus: var(--candy-focus); }
body.firewatch { --bg-color: var(--firewatch-bg-color); --start: var(--firewatch-start); --stop: var(--firewatch-stop); --focus: var(--firewatch-focus); }
body.citrus    { --bg-color: var(--citrus-bg-color);    --start: var(--citrus-start);    --stop: var(--citrus-stop);    --focus: var(--citrus-focus); }
body.marsh     { --bg-color: var(--marsh-bg-color);     --start: var(--marsh-start);     --stop: var(--marsh-stop);     --focus: var(--marsh-focus); }
body.frost     { --bg-color: var(--frost-bg-color);     --start: var(--frost-start);     --stop: var(--frost-stop);     --focus: var(--frost-focus); }

/* ---------- Theme picker ---------- */
ul.theme-picker {
  list-style: none;
  margin: 0 0 32px 0;
  padding: 7px;
  display: flex;
  gap: 8px;
  background: rgba(0, 0, 0, 0.35);
  border-radius: 999px;
}
ul.theme-picker li {
  width: 26px;
  height: 26px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  position: relative;
  color: #fff;
  transition: transform 200ms ease-in-out;
}
ul.theme-picker li:hover { transform: scale(1.2); }
ul.theme-picker li:before {
  content: "";
  position: absolute;
  top: -40px;
  padding: 6px 10px;
  border-radius: 6px;
  background: #1b1b1f;
  font-size: 12px;
  white-space: nowrap;
  opacity: 0;
  pointer-events: none;
  transition: opacity 150ms ease;
}
ul.theme-picker li:hover:before { opacity: 1; }
ul.theme-picker li.barney    { background: linear-gradient(225deg, var(--barney-start), var(--barney-stop)); }
ul.theme-picker li.slate     { background: linear-gradient(225deg, var(--slate-start), var(--slate-stop)); }
ul.theme-picker li.candy     { background: linear-gradient(225deg, var(--candy-start), var(--candy-stop)); }
ul.theme-picker li.firewatch { background: linear-gradient(225deg, var(--firewatch-start), var(--firewatch-stop)); }
ul.theme-picker li.citrus    { background: linear-gradient(225deg, var(--citrus-start), var(--citrus-stop)); }
ul.theme-picker li.marsh     { background: linear-gradient(225deg, var(--marsh-start), var(--marsh-stop)); }
ul.theme-picker li.frost     { background: linear-gradient(225deg, var(--frost-start), var(--frost-stop)); }
ul.theme-picker li.barney:before    { content: "Barney"; }
ul.theme-picker li.slate:before     { content: "Slate"; }
ul.theme-picker li.candy:before     { content: "Candy"; }
ul.theme-picker li.firewatch:before { content: "Firewatch"; }
ul.theme-picker li.citrus:before    { content: "Citrus"; }
ul.theme-picker li.marsh:before     { content: "Marsh"; }
ul.theme-picker li.frost:before     { content: "Frost"; }
ul.theme-picker li.pressed,
ul.theme-picker li.pressed:hover { transform: scale(1); box-shadow: 0 0 0 2px var(--bg-color), 0 0 0 4px #fff; }
ul.theme-picker li.pressed:before { content: ""; opacity: 0; }
ul.theme-picker li.pressed:after {
  content: "\ea41";
  font-family: boxicons;
  font-size: 18px;
  font-style: normal;
  line-height: 1;
  display: inline-block;
}

/* ---------- Card (the form itself, so the 3D flip still works) ---------- */
form.form {
  width: 100%;
  max-width: 860px;
  display: grid;
  grid-template-columns: 1fr 1.05fr;
  border-radius: 20px;
  overflow: hidden;
  background: rgba(0, 0, 0, 0.28);
  box-shadow: 0 30px 70px -20px rgba(0, 0, 0, 0.6);
  transform-style: preserve-3d;
  perspective: 1000px;
}
form.form.rotate {
  animation: rotate 1200ms ease 1 forwards;
}

/* Brand side */
.brand {
  padding: 48px 40px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  background: linear-gradient(225deg, var(--start) 16%, var(--stop) 100%);
  position: relative;
  overflow: hidden;
  transition: background 300ms ease;
}
.brand:after {
  content: "";
  position: absolute;
  width: 320px;
  height: 320px;
  right: -140px;
  bottom: -140px;
  border-radius: 50%;
  border: 48px solid rgba(255, 255, 255, 0.12);
}
.brand .logo {
  width: 46px;
  height: 46px;
  border-radius: 12px;
  background: rgba(255, 255, 255, 0.2);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px;
  color: #fff;
}
.brand-top {
  display: flex;
  align-items: center;
  gap: 12px;
}
.brand-name {
  font-size: 18px;
  font-weight: 600;
  color: #fff;
}
.brand h2 {
  font-family: "Fraunces", Georgia, serif;
  font-weight: 600;
  font-size: 34px;
  line-height: 1.12;
  margin: 0 0 14px 0;
  color: #fff;
}
.brand p.tagline {
  margin: 0;
  max-width: 28ch;
  font-size: 15px;
  line-height: 1.6;
  color: rgba(255, 255, 255, 0.82);
}

/* Form side */
.fields {
  padding: 48px 44px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  text-align: left;
}
form h1 {
  font-size: 26px;
  font-weight: 600;
  margin: 0;
  color: #fff;
}
form p {
  font-size: 15px;
  color: var(--muted);
  margin: 6px 0 32px 0;
}

.input-wrapper {
  position: relative;
  margin-bottom: 16px;
}
.input-wrapper i {
  position: absolute;
  right: 14px;
  top: 22px;
  transform: translateY(-50%);
  font-size: 22px;
  color: rgba(255, 255, 255, 0.35);
  transition: color 250ms ease-in;
}
form input[type="email"],
form input[type="text"],
form input[type="password"] {
  width: 100%;
  padding: 14px 44px 14px 14px;
  font: inherit;
  font-size: 15px;
  color: #fff;
  background: var(--field-bg);
  border: 1px solid transparent;
  border-radius: 10px;
  transition: all 250ms ease-in-out;
}
form input:focus {
  outline: none;
  background: var(--field-bg-focus);
  border-color: var(--focus);
}
form input:focus + i { color: var(--focus); }
form input:-webkit-autofill {
  -webkit-text-fill-color: #fff;
  -webkit-box-shadow: 0 0 0 40px #1a1a22 inset;
}
form ::placeholder { color: var(--muted); opacity: 1; }

/* Validation (same classes as your Blade code) */
form input.is-invalid { border-color: #ff7a7a; }
.invalid-feedback {
  display: block;
  margin-top: 6px;
  font-size: 13px;
  color: var(--error);
}

.button-wrapper { margin-top: 24px; }
button[type="submit"] {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 6px;
  padding: 14px 10px;
  font: inherit;
  font-size: 16px;
  font-weight: 600;
  color: var(--bg-color);
  background: #fff;
  border: none;
  border-radius: 10px;
  cursor: pointer;
  transition: transform 150ms ease, box-shadow 150ms ease;
}
button[type="submit"]:hover { transform: translateY(-1px); box-shadow: 0 10px 24px -8px rgba(0, 0, 0, 0.5); }
button[type="submit"]:focus-visible,
ul.theme-picker li:focus-visible { outline: 2px solid var(--focus); outline-offset: 3px; }
button[type="submit"] i { font-size: 24px; }

@keyframes rotate {
  0%   { transform: rotate3d(0, 0, 0, 0); }
  100% { transform: rotate3d(0, 1, 0, 360deg); }
}
@-webkit-keyframes rotate {
  0%   { transform: rotate3d(0, 0, 0, 0); }
  100% { transform: rotate3d(0, 1, 0, 360deg); }
}

@media (max-width: 760px) {
  form.form { grid-template-columns: 1fr; max-width: 420px; }
  .brand { padding: 28px 28px; gap: 20px; }
  .brand h2 { font-size: 28px; }
  .brand p.tagline { display: none; }
  .fields { padding: 32px 28px 36px; }
}
@media (prefers-reduced-motion: reduce) {
  form.form.rotate { animation: none; }
  * { transition: none !important; }
}
    </style>
</head>
<body>
    <ul class="theme-picker">
  <li data-theme="barney" class="barney"></li>
  <li data-theme="firewatch" class="firewatch"></li>
  <li data-theme="citrus" class="citrus"></li>
  <li data-theme="marsh" class="marsh"></li>
  <li data-theme="frost" class="frost"></li>
  <li data-theme="slate" class="slate"></li>
  <li data-theme="candy" class="candy"></li>
</ul>

<form class="form" method="POST" action="{{ route('login') }}">
    @csrf

  <div class="brand">
    <div class="brand-top">
      <div class="logo"><i class="bx bx-edit-alt"></i></div>
      <span class="brand-name">Jaber's Blogs</span>
    </div>
    <div>
      <h2>Sharing Knowledge, One Article at a Time.</h2>
      <p class="tagline">Sign in to write new articles, update your posts and keep your readers informed.</p>
    </div>
  </div>

  <div class="fields">
    <h1>Welcome Back</h1>
    <p>Enter your credentials to continue.</p>

    <div class="input-wrapper">
      <input type="email" name="email" id="email" placeholder="Enter your email"  class="@error('email') is-invalid @enderror" required/>
      <i class="bx bxs-user-circle"></i>
       @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
       @enderror
    </div>

    <div class="input-wrapper">
      <input type="password" name="password" id="password" placeholder="Enter your password" class=" @error('password') is-invalid @enderror" required />
      <i class="bx bx-key"></i>
      @error('password')
        <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
        </span>
      @enderror
    </div>

    <div class="button-wrapper">
      <button type="submit">
        Sign In
        <i class="bx bx-right-arrow-alt"></i>
      </button>
    </div>
  </div>
</form>

<script>
    let themeList = document.querySelector(".theme-picker");
let defaultThemeItem = themeList.firstElementChild;
let themeListItems = themeList.childNodes;
let themeTracker = themeState();
let listItemTracker = itemState();
let bodyElement = document.body;
let form = document.querySelector(".form");

init();

function init() {
  bindEvents();
  setTheme();
  defaultThemeItem.click();
}

function bindEvents() {
  themeListItems.forEach(function (element) {
    element.addEventListener("click", handleThemeChange);
  });
}

function handleThemeChange(event) {
  let selectedItem = event.target;
  let selectedTheme = event.target.dataset.theme;

  if (
    !selectedItem.classList.contains("pressed") &&
    !form.classList.contains("rotate")
  ) {
    form.classList.add("rotate");

    setSelectedThemeItem(selectedItem);

    setTimeout(() => {
      setTheme(selectedTheme);
    }, 650);

    setTimeout(() => {
      form.classList.remove("rotate");
    }, 1500);
  }
}

function setTheme(selectedTheme) {
  bodyElement.classList.remove(themeTracker.get());
  themeTracker.set(selectedTheme);
  bodyElement.classList.add(themeTracker.get());
}

function setSelectedThemeItem(selectedItem) {
  listItemTracker.get()?.classList.remove("pressed");
  listItemTracker.set(selectedItem);
  listItemTracker.get().classList.add("pressed");
}

function themeState() {
  let selectedTheme = null;
  return {
    set: function (theme) {
      selectedTheme = theme;
    },

    get: function () {
      return selectedTheme;
    }
  };
}

function itemState() {
  let selectedItem = null;
  return {
    set: function (item) {
      selectedItem = item;
    },

    get: function () {
      return selectedItem;
    }
  };
}

</script>
</body>
</html>