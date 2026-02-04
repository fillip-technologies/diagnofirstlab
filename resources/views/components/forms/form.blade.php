<section class="max-w-6xl mx-auto px-6 py-16">

  <!-- Outer Card -->
  <div class="bg-white rounded-2xl shadow-2xl overflow-hidden">

    <!-- Header -->
    <div class="px-10 py-8 bg-gradient-to-r from-primaryFrom to-primaryTo text-white">
      <h1 class="text-3xl font-bold">Centre Registration Form</h1>
      <p class="mt-2 text-sm opacity-90">
        Please fill the details below to register your centre
      </p>
    </div>

    <!-- Form Body -->
    <div class="p-10 space-y-14">

      <!-- SECTION 1 -->
      <div>
        <div class="section-head">1. Centre Information</div>
        <div class="grid md:grid-cols-2 gap-5 mt-6">
          <input class="input" placeholder="Centre Name *">
          <input class="input" placeholder="Centre Address *">
          <input class="input" placeholder="City *">
          <select class="input">
            <option>Select State *</option>
          </select>
          <input class="input" placeholder="Pincode *">
          <input class="input" placeholder="Contact Number *">
          <input class="input md:col-span-2" placeholder="Email ID *">
        </div>
      </div>

      <!-- SECTION 2 -->
      <div>
        <div class="section-head">2. Owner / Applicant Details</div>
        <div class="grid md:grid-cols-2 gap-5 mt-6">
          <input class="input" placeholder="Full Name of Applicant *">
          <select class="input">
            <option>Select Role *</option>
          </select>
          <input class="input" placeholder="Mobile Number *">
          <input class="input" placeholder="Email Address">
          <select class="input">
            <option>ID Proof Type *</option>
          </select>
          <input type="file" class="file-input">
        </div>
      </div>

      <!-- SECTION 3 -->
      <div>
        <div class="section-head">3. Centre Infrastructure</div>
        <div class="grid md:grid-cols-2 gap-8 mt-6 text-sm text-gray-700">
          <div class="option-box">
            <p>Separate Collection Room?</p>
            <label><input type="radio"> Yes</label>
            <label class="ml-4"><input type="radio"> No</label>
          </div>

          <div class="option-box">
            <p>Refrigerator for Sample Storage?</p>
            <label><input type="radio"> Yes</label>
            <label class="ml-4"><input type="radio"> No</label>
          </div>

          <div class="option-box">
            <p>Bio-medical Waste Disposal?</p>
            <label><input type="radio"> Yes</label>
            <label class="ml-4"><input type="radio"> No</label>
          </div>

          <div>
            <p class="font-medium mb-2">Centre Photographs</p>
            <input type="file" multiple class="file-input">
          </div>
        </div>
      </div>

      <!-- SECTION 4 -->
      <div>
        <div class="section-head">4. Staff Information</div>
        <div class="grid md:grid-cols-2 gap-6 mt-6">
          <input class="input" placeholder="Number of Phlebotomists">
          <div class="option-box">
            <p>Training Certificates Available?</p>
            <label><input type="radio"> Yes</label>
            <label class="ml-4"><input type="radio"> No</label>
          </div>
          <input type="file" class="file-input md:col-span-2">
        </div>
      </div>

      <!-- SECTION 5 -->
      <div>
        <div class="section-head">5. Bank & Payment Details</div>
        <div class="grid md:grid-cols-2 gap-5 mt-6">
          <input class="input" placeholder="Bank Name *">
          <input class="input" placeholder="Account Number *">
          <input class="input" placeholder="IFSC Code *">
          <input type="file" class="file-input">
        </div>
      </div>

      <!-- SECTION 6 -->
      <div>
        <div class="section-head">6. Declaration</div>

        <label class="flex gap-3 text-sm text-gray-700 mt-6">
          <input type="checkbox" class="mt-1">
          I hereby declare that the above information is true and correct.
        </label>

        <div class="grid md:grid-cols-2 gap-5 mt-6">
          <input class="input" placeholder="Applicant Name">
          <input class="input" type="date">
          <input type="file" class="file-input md:col-span-2">
        </div>

        <!-- Fake Submit -->
        <div class="mt-14 text-center">
          <button
            type="button"
            class="px-24 py-4 rounded-full text-white font-semibold text-lg
                   bg-gradient-to-r from-primaryFrom to-primaryTo
                   hover:opacity-90 transition">
            Submit
          </button>
          <p class="text-sm text-gray-500 mt-3">
            This is an enquiry form only. Submission is disabled.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  .section-head {
    @apply text-lg font-semibold text-primaryFrom border-b border-primaryFrom/20 pb-2;
  }

  .input {
    @apply w-full px-4 py-3 border rounded-xl focus:ring-2 focus:ring-primaryFrom outline-none;
  }

  .file-input {
    @apply w-full border rounded-xl px-3 py-2 bg-white;
  }

  .option-box {
    @apply bg-secondaryFrom/10 rounded-xl p-4;
  }
</style>