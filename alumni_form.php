<html>
  <head>
<style>
    /* header + description + form tweaks */
    body {
      background: #e5eaf5;
    }

    .top-header {
      background: #fff;
      padding: 1rem 0;
      border-radius: 12px;
    }

    .logo-left,
    .logo-right {
      width: auto;
      height: 115px;
      /* border-radius: 50%; */
      object-fit: contain;
      /* background-color: black; */
      display: block;
    }

    .logo-center {
      height: 150px;
      width: auto;
      /* max-width: 420px; */
      object-fit: contain;
      display: block;
    }

    .header-row {
      align-items: center;
      justify-content: center;
    }

    .header-col {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .header-wrap {
      padding-top: 0.8rem;
      padding-bottom: 0.4rem;
    }

    .desc-block {
      width: 90%;
      margin: 0.6rem auto 1.4rem;
      padding: 1rem 1.25rem;
      text-align: center;
      background: white;
      border-radius: 12px;
    }

    .alumni-card {
      max-width: 90%;
      margin: 0.8rem auto 2.2rem;
      border-radius: 12px;
    }

    .required-star {
      color: red;
    }

    .form-section-title {
      letter-spacing: .12em;
      font-weight: 700;
    }

    .note-small {
      font-size: .95rem;
      color: #6c757d;
    }

    /* SMALL SCREEN LOGOS */
    .mobile-logo-round {
      width: 250px;
      height: 100px;
      object-fit: contain;
      /* border-radius: 50%; */
    }

    .mobile-logo-center {
      max-width: 50%;
      width: 100%;
      height: auto;
      object-fit: contain;
    }

    /* Ensures spacing & alignment */
    @media (max-width: 576px) {
      .mobile-logo-round {
        margin-bottom: 0.4rem;
      }
      .mobile-logo-round,.desc-block  {
        width: 100% !important;
      }

      .mobile-logo-center {
        margin-top: 0.4rem;
      }

      .desc-block {
        margin-top: 10px;
      }

      .alumni-card {
        width: 100% !important;
        margin:auto;
        border-radius: 12px;
      }
    }

    .contact-footer {
      background: #ffffff;
      padding: 1.5rem 1rem 0;
      border-radius: 12px;
    }

    .footer-title {
      font-weight: 700;
      letter-spacing: 0.05em;
      margin-bottom: 0.3rem;
    }

    .footer-hr {
      width: 140px;
      /* only under text */
      margin: 0 auto;
      border-top: 2px solid #444;
    }

    .contact-card {
      background: #f9f9f9;
      border-radius: 12px;
      padding: 1rem;
      text-align: center;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
      transition: 0.2s ease;
    }

    .contact-card:hover {
      transform: translateY(-3px);
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.12);
    }

    .contact-name {
      font-size: 1.05rem;
      font-weight: 600;
      margin-bottom: .25rem;
    }

    .contact-number {
      font-size: .95rem;
      color: #555;
      margin: 0;
    }

    @media (max-width: 576px) {
      .footer-hr {
        width: 110px;
      }

      .contact-card {
        padding: 0.9rem;
      }
    }
  </style>
</head>

<body>
  <!-- HEADER: three logos top-aligned, transparent background -->
  <header class="top-header">
    <div class="container header-wrap">
      <div class="row header-row">

        <!-- LEFT LOGO (visible only on md and above) -->
        <div class="col-3 d-none d-md-flex justify-content-start header-col">
          <img src="../assets/images/alumni_images/cvm.png" class="logo-left" alt="Left Logo">
        </div>

        <!-- CENTER LOGO (visible only on md and above) -->
        <div class="col-6 d-none d-md-flex justify-content-center header-col">
          <img src="../assets/images/alumni_images/Samarpan_Logo.png" class="logo-center" alt="Center Logo">
        </div>

        <!-- RIGHT LOGO (visible only on md and above) -->
        <div class="col-3 d-none d-md-flex justify-content-end header-col">
          <img src="../assets/images/alumni_images/semcom-logo.png" class="logo-right" alt="Right Logo">
        </div>


        <!-- ******** SMALL SCREEN VIEW (≤ MD) ******** -->
        <div class="col-12 d-md-none text-center mt-2">

          <!-- FIRST ROW → TWO LOGOS SIDE BY SIDE -->
          <div class="row justify-content-center mb-2">

            <div class="col-6 text-end">
              <img src="../assets/images/alumni_images/cvm.png"
                class="mobile-logo-round"
                alt="Left Logo">
            </div>

            <div class="col-6 text-start">
              <img src="../assets/images/alumni_images/semcom-logo.png"
                class="mobile-logo-round"
                alt="Right Logo">
            </div>

          </div>

          <!-- SECOND ROW → CENTER LOGO FULL WIDTH -->
          <div class="row">
            <div class="col-12">
              <img src="../assets/images/alumni_images/Samarpan_Logo.png"
                class="mobile-logo-center"
                alt="Center Logo">
            </div>
          </div>

        </div>
        <!-- ******** END SMALL SCREEN VIEW ******** -->

      </div>
    </div>
  </header>

  <!-- DESCRIPTION BLOCK -->
  <section class="desc-block">
    <div class="container">
      <div class="row">
        <div class="col">
          <p style="margin-bottom:.4rem; font-weight:600;">[Invitation / Description Title]</p>
          <p class="note-small">This is a short invitation/description that explains the purpose of this alumni form. Replace these placeholder lines with your 3–4 lines of text describing why we are collecting alumni details and what the event is about.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FORM CARD -->
  <div class="px-md-4">
    <div class="card alumni-card shadow-sm">
      <div class="card-body">
        <div class="row mb-3">
          <div class="col">
            <!-- <h3 class="mb-1">Samarpan Invitation</h3> -->
            <p class="note-small">Fields marked with <span class="required-star">*</span> are required.</p>
          </div>
        </div>

        <?php if (!empty($errors)): ?>
          <div class="alert alert-danger">
            <ul class="mb-0">
              <?php foreach ($errors as $err) echo "<li>" . s($err) . "</li>"; ?>
            </ul>
          </div>
        <?php endif; ?>

        <?php if ($success_msg): ?>
          <div class="alert alert-success"><?php echo s($success_msg); ?></div>
        <?php endif; ?>

        <form id="alumniForm" method="post" novalidate>
          <!-- 1. Name row (3 columns large) -->
          <div class="row g-3">
            <div class="col-lg-4 col-md-6">
              <label class="form-label">First Name <span class="required-star">*</span></label>
              <input type="text" name="first_name" class="form-control form-control-lg" required value="<?php echo s($posted['first_name']); ?>" pattern="[A-Za-z\s]+" />
            </div>
            <div class="col-lg-4 col-md-6">
              <label class="form-label">Middle Name <span class="required-star">*</span></label>
              <input type="text" name="middle_name" class="form-control form-control-lg" required value="<?php echo s($posted['middle_name']); ?>" pattern="[A-Za-z\s]+" />
            </div>
            <div class="col-lg-4 col-md-12">
              <label class="form-label">Last Name <span class="required-star">*</span></label>
              <input type="text" name="last_name" class="form-control form-control-lg" required value="<?php echo s($posted['last_name']); ?>" pattern="[A-Za-z\s]+" />
            </div>
          </div>

          <hr class="my-5">

          <!-- 2. Contact row -->
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">Email <span class="required-star">*</span></label>
              <input type="email" name="email" class="form-control form-control-lg" required value="<?php echo s($posted['email']); ?>" />
            </div>
            <div class="col-md-4">
              <label class="form-label">Mobile Number (WhatsApp preferred) <span class="required-star">*</span></label>
              <input type="text" name="mobile" class="form-control form-control-lg" maxlength="15" required value="<?php echo s($posted['mobile']); ?>" pattern="[0-9]+" />
            </div>
            <div class="col-md-4">
              <label class="form-label">Secondary Mobile No</label>
              <input type="text" name="secondary_mobile" class="form-control form-control-lg" maxlength="15" value="<?php echo s($posted['secondary_mobile']); ?>" pattern="[0-9]*" />
            </div>
          </div>

          <hr class="my-5">

          <!-- 3. Academic background - dynamic -->
          <div class="mb-3 d-flex flex-column">
            <label class="form-label form-section-title">Did you complete UG / PG / Both from SEMCOM? <span class="required-star">*</span></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input study-from" type="radio" name="study_from" id="s_ug" value="UG" <?php echo $posted['study_from'] == 'UG' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="s_ug">UG</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input study-from" type="radio" name="study_from" id="s_pg" value="PG" <?php echo $posted['study_from'] == 'PG' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="s_pg">PG</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input study-from" type="radio" name="study_from" id="s_both" value="BOTH" <?php echo $posted['study_from'] == 'BOTH' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="s_both">Both</label>
            </div>
          </div>

          <!-- UG details -->
          <div id="ug_section" class="row g-3 mb-3" style="display:none;">
            <div class="col-md-4">
              <label class="form-label">UG Course <span class="required-star">*</span></label>
              <select name="ug_course" class="form-control form-control-lg">
                <option value="">-- Select UG Course --</option>
                <?php
                $ug_options = ['BCA', 'BBA', 'BCOM'];
                foreach ($ug_options as $o) {
                  $sel = ($posted['ug_course'] == $o) ? 'selected' : '';
                  echo "<option value=\"$o\" $sel>$o</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">UG Year of Joining <span class="required-star">*</span></label>
              <select name="ug_year_join" class="form-control form-control-lg">
                <option value="">-- Year --</option>
                <?php
                $currentYear = (int)date('Y') + 1;
                for ($y = 1999; $y <= $currentYear; $y++) {
                    $next = ($y + 1);     
                    $display = "$y-" . str_pad($next, 2, "0", STR_PAD_LEFT);

                    $sel = ($posted['ug_year_join'] == $display) ? 'selected' : '';
                    echo "<option value=\"$display\" $sel>$display</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">UG Year of Passing <span class="required-star">*</span></label>
              <select name="ug_year_pass" class="form-control form-control-lg">
                <option value="">-- Year --</option>
                <?php
                for ($y = 1999; $y <= $currentYear; $y++) {
                    $next = ($y + 1);     
                    $display = "$y-" . str_pad($next, 2, "0", STR_PAD_LEFT);

                    $sel = ($posted['ug_year_pass'] == $display) ? 'selected' : '';
                    echo "<option value=\"$display\" $sel>$display</option>";
                }
                ?>
            </select>
            </div>
          </div>

          <!-- PG details -->
          <div id="pg_section" class="row g-3 mb-3" style="display:none;">
            <div class="col-md-4">
              <label class="form-label">PG Course <span class="required-star">*</span></label>
              <select name="pg_course" class="form-control form-control-lg">
                <option value="">-- Select PG Course --</option>
                <?php
                $pg_options = ['MBA', 'MCOM'];
                foreach ($pg_options as $o) {
                  $sel = ($posted['pg_course'] == $o) ? 'selected' : '';
                  echo "<option value=\"$o\" $sel>$o</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">PG Year of Joining <span class="required-star">*</span></label>
              <select name="pg_year_join" class="form-control form-control-lg">
                <option value="">-- Year --</option>
                <?php
                for ($y = 1999; $y <= $currentYear; $y++) {
                    $next = ($y + 1);     
                    $display = "$y-" . str_pad($next, 2, "0", STR_PAD_LEFT);

                    $sel = ($posted['pg_year_join'] == $display) ? 'selected' : '';
                    echo "<option value=\"$display\" $sel>$display</option>";
                }
                ?>
              </select>
            </div>
            <div class="col-md-4">
              <label class="form-label">PG Year of Passing <span class="required-star">*</span></label>
              <select name="pg_year_pass" class="form-control form-control-lg">
                <option value="">-- Year --</option>
                <?php
                for ($y = 1999; $y <= $currentYear; $y++) {
                    $next = ($y + 1);     
                    $display = "$y-" . str_pad($next, 2, "0", STR_PAD_LEFT);

                    $sel = ($posted['pg_year_pass'] == $display) ? 'selected' : '';
                    echo "<option value=\"$display\" $sel>$display</option>";
                }
                ?>
              </select>
            </div>
          </div>

          <!-- Enrollment -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label class="form-label">Enrollment Number (If assigned by CVMU)</label>
              <input type="text" name="enrollment_no" class="form-control form-control-lg" value="<?php echo s($posted['enrollment_no']); ?>" />
            </div>
          </div>

          <hr class="my-5">

          <!-- Highest qualification & city -->
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Highest Qualification <span class="required-star">*</span></label>
              <input type="text" name="highest_qualification" required class="form-control form-control-lg" value="<?php echo s($posted['highest_qualification']); ?>" />
            </div>
            <div class="col-md-6">
              <label class="form-label">Where are you presently situated? (City) <span class="required-star">*</span></label>
              <input type="text" name="city" required class="form-control form-control-lg" value="<?php echo s($posted['city']); ?>" />
            </div>
          </div>

          <hr class="my-5}">

          <!-- Occupation -->
          <div class="mb-3">
            <label class="form-label form-section-title">Occupation <span class="required-star">*</span></label>
            <div class="form-check form-check-inline">
              <input class="form-check-input occupation" type="radio" name="occupation_type" id="oc_job" value="Job" <?php echo $posted['occupation_type'] == 'Job' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="oc_job">Job</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input occupation" type="radio" name="occupation_type" id="oc_bus" value="Business" <?php echo $posted['occupation_type'] == 'Business' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="oc_bus">Business</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input occupation" type="radio" name="occupation_type" id="oc_oth" value="Other" <?php echo $posted['occupation_type'] == 'Other' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="oc_oth">Other</label>
            </div>
          </div>

          <div id="company_block" class="mb-3" style="display:none;">
            <label class="form-label">Name of the Company / Business <span class="required-star">*</span></label>
            <input type="text" name="company_name" class="form-control form-control-lg" value="<?php echo s($posted['company_name']); ?>" />
          </div>

          <div id="occupation_other_block" class="mb-3" style="display:none;">
            <label class="form-label">Please specify your occupation <span class="required-star">*</span></label>
            <input type="text" name="occupation_other" class="form-control form-control-lg" value="<?php echo s($posted['occupation_other']); ?>" />
          </div>

          <hr class="my-5">

          <!-- Attendance -->
          <div class="mb-3">
            <label class="form-label form-section-title">Would you like to attend the Alumni meet on <strong>11 January 2026</strong>?</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input will-attend" type="radio" name="will_attend" id="att_yes" value="Yes" <?php echo $posted['will_attend'] == 'Yes' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="att_yes">Yes</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input will-attend" type="radio" name="will_attend" id="att_no" value="No" <?php echo $posted['will_attend'] == 'No' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="att_no">No</label>
            </div>
          </div>

          <div id="members_block" class="mb-3" style="display:none;">
            <label class="form-label">
                If yes, how many members would accompany you? 
                <span class="required-star">*</span>
            </label>

            <select name="members_count" class="form-control form-control-lg">
                <option value="">-- Select --</option>
                <?php
                for ($i = 1; $i <= 4; $i++) {
                    $sel = ($posted['members_count'] == $i) ? 'selected' : '';
                    echo "<option value=\"$i\" $sel>$i</option>";
                }
                ?>
            </select>
        </div>

          <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Save</button>
            <button type="reset" id="btnReset" class="btn btn-outline-secondary btn-lg ms-2">Reset</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <footer class="contact-footer mt-4">
    <div class="container">

      <!-- Heading -->
      <h4 class="footer-title text-center">Contact Us</h4>
      <hr class="footer-hr">

      <!-- Contact Persons -->
      <div class="row justify-content-center mt-3">

        <!-- Person 1 -->
        <div class="col-md-4 col-sm-6 mb-3">
          <a href="tel:9426917590" class="text-decoration-none">
            <div class="contact-card">
              <h5 class="contact-name">Dr. Ajayraj Vyas</h5>
              <p class="contact-number">+91 94269 17590</p>
            </div>
          </a>
        </div>

        <!-- Person 2 -->
        <div class="col-md-4 col-sm-6 mb-3">
          <a href="tel:9427386951" class="text-decoration-none">
            <div class="contact-card">
              <h5 class="contact-name">Dr. Rina Dave</h5>
              <p class="contact-number">+91 94273 86951</p>
            </div>
          </a>
        </div>

        <!-- Person 3 -->
        <div class="col-md-4 col-sm-6 mb-3">
          <a href="tel:9427858291" class="text-decoration-none">
            <div class="contact-card">
              <h5 class="contact-name">Ms. Palak Patel</h5>
              <p class="contact-number">+91 94278 58291</p>
            </div>
          </a>
        </div>


      </div>

    </div>
  </footer>

  <script>
    $(function() {
      // helper show/hide functions
      function toggleStudySections() {
        const val = $('input[name="study_from"]:checked').val();
        $('#ug_section').toggle(val === 'UG' || val === 'BOTH');
        $('#pg_section').toggle(val === 'PG' || val === 'BOTH');
      }

      function toggleOccupation() {
        const val = $('input[name="occupation_type"]:checked').val();
        $('#company_block').toggle(val === 'Job' || val === 'Business');
        $('#occupation_other_block').toggle(val === 'Other');
      }

      function toggleAttendance() {
        const val = $('input[name="will_attend"]:checked').val();
        $('#members_block').toggle(val === 'Yes');
      }

      // initial state (on page load)
      toggleStudySections();
      toggleOccupation();
      toggleAttendance();

      // watchers
      $('.study-from').on('change', toggleStudySections);
      $('.occupation').on('change', toggleOccupation);
      $('.will-attend').on('change', toggleAttendance);

      // numeric-only enforcement for mobile & members fields
      $('input[name="mobile"], input[name="secondary_mobile"], input[name="members_count"]').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
      });

      // simple client-side check on submit, keep it lightweight (server validates too)
      $('#alumniForm').on('submit', function(e) {
        // Check required radio groups visually
        if (!$('input[name="study_from"]:checked').length) {
          alert('Please select whether you completed UG, PG, or Both.');
          e.preventDefault();
          return false;
        }
        if (!$('input[name="occupation_type"]:checked').length) {
          alert('Please select your Occupation.');
          e.preventDefault();
          return false;
        }
        return true;
      });

      // Reset handler: hide dynamic parts and clear selection
      $('#btnReset').on('click', function() {
        setTimeout(function() {
          // small timeout to let default reset finish
          $('input[type=radio]').prop('checked', false);
          $('select').prop('selectedIndex', 0);
          $('.hidden, #ug_section, #pg_section, #company_block, #occupation_other_block, #members_block').hide();
        }, 10);
      });
    });
  </script>

</body>

</html>



