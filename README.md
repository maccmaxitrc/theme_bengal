Installation instructions:

1. Copy repo into theme folder and rename "theme_bengal" to "bengal".
2. Refresh Moodle and install theme.
3. Add logo from pix/compactlogo.png to Site Administration > Appearance > Logos > Compact logo.
4. Add the following HTML to Site Administration > Appearance > Additional HTML > Within HEAD:

    <pre><code>&lt;link rel="preconnect" href="https://fonts.googleapis.com">
   &lt;link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   &lt;link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
   &lt;link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&display=swap" rel="stylesheet"></code></pre>
    
5. Add the following to Site Administration > Appearance > Theme Settings > Custom menu options:

    <pre><code>ISU Resources
   -Counseling Services|https://www.isu.edu/ctc/"target="_blank|ISU Counseling Services
   -Disability Services|https://isu.edu/disabilityservices/" target="_blank|ISU Disability Services
   -IT Service Desk|https://tigertracks.isu.edu/TDClient/Home/" target="_blank|IT Service Desk
   -Student Success Center|http://isu.edu/success" target="_blank|ISU Student Success Center
   -Technology, Policies and Resources|https://isu.edu/itrc/elearning-technology-policies-and-resources/" target="_blank|Accessibility/Privacy Policies
   Help|#" onclick="(Tawk_API.toggle())|Moodle ISU Support</code></pre>
