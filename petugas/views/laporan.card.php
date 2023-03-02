<style>


p {
  margin: 0;
}

p:not(:last-child) {
  margin-bottom: 1.5em;
}

body {

  background:
    url(https://source.unsplash.com/E8Ufcyxz514/2400x1823)
    center / cover no-repeat fixed;
}

.card {
  max-width: 300px;
  min-height: 200px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;

  max-width: 500px;
  height: 300px;
  padding: 35px;

  border: 1px solid rgba(255, 255, 255, .25);
  border-radius: 20px;
  background-color: rgba(255, 255, 255, 0.45);
  box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.25);

  backdrop-filter: blur(15px);
}

.card-footer {
  font-size: 0.65em;
  color: #446;
}

</style>
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
<div class="card">
  <p>A glass-like card to demonstrate the <strong>Glassmorphism UI design</strong> trend.</p>
  <p class="card-footer">Created by Rahul C.</p>
</div>
