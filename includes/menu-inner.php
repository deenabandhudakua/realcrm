

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.php" class="app-brand-link">
       <?php //require_once 'includes/app-brand.php' ?>
        <span class="app-brand-text demo menu-text fw-bold ms-2">Real Estate</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11.4854 4.88844C11.0081 4.41121 10.2344 4.41121 9.75715 4.88844L4.51028 10.1353C4.03297 10.6126 4.03297 11.3865 4.51028 11.8638L9.75715 17.1107C10.2344 17.5879 11.0081 17.5879 11.4854 17.1107C11.9626 16.6334 11.9626 15.8597 11.4854 15.3824L7.96672 11.8638C7.48942 11.3865 7.48942 10.6126 7.96672 10.1353L11.4854 6.61667C11.9626 6.13943 11.9626 5.36568 11.4854 4.88844Z"
            fill="currentColor"
            fill-opacity="0.6" />
          <path
            d="M15.8683 4.88844L10.6214 10.1353C10.1441 10.6126 10.1441 11.3865 10.6214 11.8638L15.8683 17.1107C16.3455 17.5879 17.1192 17.5879 17.5965 17.1107C18.0737 16.6334 18.0737 15.8597 17.5965 15.3824L14.0778 11.8638C13.6005 11.3865 13.6005 10.6126 14.0778 10.1353L17.5965 6.61667C18.0737 6.13943 18.0737 5.36568 17.5965 4.88844C17.1192 4.41121 16.3455 4.41121 15.8683 4.88844Z"
            fill="currentColor"
            fill-opacity="0.38" />
        </svg>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

<ul class="menu-inner py-1">
    <!-- Dashboards -->
    <li class="menu-item">
      <a href="index.php" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
        <div data-i18n="Dashboards">Dashboards</div>
      </a>
    </li>
    <!-- Department menu start -->
     <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
        <div data-i18n="System Admin">System Admin</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="company_info.php" class="menu-link">
            <div data-i18n="Company Info">Company Info</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="branch_info.php" class="menu-link">
            <div data-i18n="Branch Info">Branch Info</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="bank_info.php" class="menu-link">
            <div data-i18n="Bank Info">Bank Info</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Board Of Directors">Board Of Directors</div>
          </a>
        </li>

      </ul>
    </li>
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
        <div data-i18n="Department">Department</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="department_name.php" class="menu-link">
            <div data-i18n="Department Name">Department Name</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Designation">Designation</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Level">Level</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Grade">Grade</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Organisation Structure">Organisation Structure</div>
          </a>
        </li>
      </ul>
    </li>
      <!-- Employee Management menu start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-notebook-outline"></i>
        <div data-i18n="Employee Management">Employee Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Company Profile">Company Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Address">Address</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Personal Profile">Personal Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Family Profile">Family Profile</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Education Profile">Education Profile</div>
          </a>
        </li>
            <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Training & Education Certification">Training & Education Certification</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Experience">Experience</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Skill Level">Skill Level</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Bank & Others">Bank & Others</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Salary">Salary</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Document">Document</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="KYC">KYC</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="#" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
        <div data-i18n="Team Management">Team Management</div>
      </a>
    </li>
      <!--Business Management menu start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-form-select"></i>
        <div data-i18n="Business Management">Business Management</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Location Master">Location Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Zone / Segment">Zone / Segment</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Area">Area</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Territory">Territory</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Point">Point</div>
          </a>
      </ul>
    </li>
    <!--Business Management End -->
    <li class="menu-item">
      <a href="#" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
        <div data-i18n="Assignment">Assignment</div>
      </a>
    </li>
    <!--Pre - Projectmenu start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-form-select"></i>
        <div data-i18n="Pre Project">Pre Project</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Location Master">Location Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="New Project Development">New Project Development</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Confirmed Project">Confirmed Project</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Business Management End -->
    <!--Projects start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
        <div data-i18n="Projects">Projects</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Project Type">Project Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Payment Schedule">Payment Schedule</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Product Type">Product Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Raise Cost Type">Raise Cost Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Amenity Master">Amenity Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Nearby Master">Nearby Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Facing Master">Facing Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Commission Setup">Commission Setup</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Project">Project</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Projects End -->
    <!--Enquiry Bucket start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-form-select"></i>
        <div data-i18n="Enquiry Bucket">Enquiry Bucket</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Quotation Type">Quotation Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Visit Type">Visit Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Communication Type Master">Communication Type Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Source Type">Source Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Enquiry Type">Enquiry Type</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Lead Enquiry Stage">Lead Enquiry Stage</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Lead Enquiry Status">Lead Enquiry Status</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Lead Activity Status">Lead Activity Status</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Customer Form">Customer Form</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Buyer's Persona">Buyer's Persona</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Enquiry Table">Enquiry Table</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Dead Table">Dead Table</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Enquiry Bucket End -->
     <!--FollowUp start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-flip-to-front"></i>
        <div data-i18n="FollowUp">FollowUp</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Pre Sales Enquiry">Pre Sales Enquiry</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Quotation">Quotation</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Visit">Visit</div>
          </a>
        </li>
      </ul>
    </li>
    <!--FollowUp End -->
    <!--Sales start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
        <div data-i18n="Sales">Sales</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Payment Recipt">Payment Recipt</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Payment Schedule">Payment Schedule</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Sales Agreement">Sales Agreement</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Collection">Collection</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Demand Letted Master">Demand Letted Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Penalty Master">Penalty Master</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Cancelation Policy">Cancelation Policy</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Cancelation and Refund">Cancelation and Refund</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Full and Final Settlement">Full and Final Settlement</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Sales End -->
    <!--Post Sales start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
        <div data-i18n="Post Sales">Post Sales</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Registration">Registration</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Key handover">Key handover</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="OC/CC">OC/CC</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Customer End -->
    <li class="menu-item">
      <a href="#" class="menu-link">
        <i class="menu-icon tf-icons mdi mdi-account-outline"></i>
        <div data-i18n="Customer">Customer</div>
      </a>
    </li>
    <!--Customer End -->
     <!--Stock start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
        <div data-i18n="Stock">Stock</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Project Wise Stock">Project Wise Stock</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Product wise Stock">Product wise Stock</div>
          </a>
        </li>
      </ul>
    </li>
     <!--Finance  start -->
    <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons mdi mdi-file-document-outline"></i>
        <div data-i18n="Finance">Finance</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Payment Receipt">Payment Receipt</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Demand Generation">Demand Generation</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Salary">Salary</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Commision">Commision</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Receivables">Receivables</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Profit and Loss Report">Profit and Loss Report</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="Expenses">Expenses</div>
          </a>
        </li>
      </ul>
    </li>
    <!--Projects End -->
  </ul>
</aside>