# Bengal

Bengal is a Moodle theme developed by and for Idaho State University -- It brings ISU pride to Moodle in a striking and accessible way.

# Installation

1. Download the plugin and extract into theme/bengal.
2. Install like any other Moodle plugin (visit Site Administration).
3. Add ISU logo:
   
   *Site Administration > Appearance > Logos > Compact logo*:
   
   Logo can be found here: *bengal/pix/compactlogo.png*
   
4. Add HTML for Roboto Font: 

   *Site Administration > Appearance > Additional HTML > Within HEAD*:

   <pre><code>&lt;link rel="preconnect" href="https://fonts.googleapis.com">
   &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   &lt;link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   &lt;link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet"></code></pre>
   
5. Add ISU Resources links:

   *Site Administration > Appearance > Theme Settings > Custom menu options*:

   <pre><code>ISU Resources
   -Counseling Services|https://www.isu.edu/ctc/"target="_blank|ISU Counseling Services
   -Disability Services|https://isu.edu/disabilityservices/" target="_blank|ISU Disability Services
   -IT Service Desk|https://tigertracks.isu.edu/TDClient/Home/" target="_blank|IT Service Desk
   -Student Success Center|http://isu.edu/success" target="_blank|ISU Student Success Center
   -Technology, Policies and Resources|https://isu.edu/itrc/elearning-technology-policies-and-resources/" target="_blank|Accessibility/Privacy Policies
   Help|#" onclick="(Tawk_API.toggle())|Moodle ISU Support</code></pre>
