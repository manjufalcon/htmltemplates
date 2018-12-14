<form action="https://www.getdrip.com/forms/YOUR_FORM_ID/submissions" method="post" data-drip-embedded-form="YOUR_FORM_ID">
  <h3 data-drip-attribute="headline">Your Headline</h3>
  <div data-drip-attribute="description">Your Description</div>
  <div>
    <label for="fields[email]">Email Address</label><br />
    <input type="email" name="fields[email]" value="" />
  </div>

  <!-- Drop-down selector example -->
  <div>
    <label for="fields[newsletter_frequency]">Newsletter Frequency</label><br />
    <select name="fields[newsletter_frequency]">
      <option value="monthly">Monthly</option>
      <option value="weekly">Weekly</option>
      <option value="daily">Daily</option>
    </select>
  </div>

  <div>
    <input type="submit" name="submit" value="Sign Up" data-drip-attribute="sign-up-button" />
  </div>
</form>
