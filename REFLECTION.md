# Reflection: Ethics and Critical Thinking in the Front End

Cowboy Property Management, IS 6465 Group 3: Alex King, Christian Sorensen, Nasly Gamboa

## How we use ethics

**Protecting resident information.** The pages show names, unit numbers, and maintenance details for real people. In the use case documents (UC-06, business rule BR-05) we specified that a resident only sees requests for their own unit, and that the "not found" message for a request they are not allowed to see is the same as for one that does not exist, so the page does not confirm what other residents have reported. The midterm pages are the admin view with no login check yet; the role filtering is built in the final project. Resident contact details are not shown on list pages where a passerby could read them.

**Honest status.** The status badges (Pending, In progress, Completed) are the resident's main window into whether anyone is working on their problem. We kept the vocabulary to three plain words, used the same words on the dashboard, list, detail, and edit pages, and did not add a "Received" state that would look like progress without any work being done. The same idea comes from the Module 1 handout: the confirmation should show acceptance without claiming more than the system did.

**Accessibility.** Every input has a visible label tied to it with `for` and `id`, icon-only buttons carry `title` or `aria-label`, and the color badges also carry text so status does not depend on color alone. A property manager who relies on a screen reader or has color vision deficiency should be able to use every page.

**Disclosing AI use.** Parts of the CSS and page scaffolding were generated with AI tools. Every use is recorded in `AI-use.txt` with the prompt, what was kept, what was rejected, and why. We reviewed and edited all generated code before committing it.

**Destructive actions need confirmation.** Delete is never a one-click action. Both delete pages show the record first and require a second explicit "Yes, delete" step, with Cancel as the safer default position.

## How we use critical thinking

**Questioning the wireframes.** The Figma wireframes had one Add/Edit form for units and one for requests. When we built the pages we realised the edit form needs to be prepopulated and that status should be a constrained choice, not free text, because the ERD limits status to three values. We changed the form rather than copying the wireframe literally, and we documented the gap in the use case documents.

**Designing for the database we do not have yet.** The midterm has no database, but the form fields map to columns in the ERD (unit_number, bed, bath, price, status, issue, description, date, assigned employee), every list is built from a PHP array with a `foreach` loop rather than hard-coded rows, and every link passes an id in the query string. In the final project the arrays get replaced with queries and the pages should not need to be restructured.

**Validating input even when there is no backend.** We escaped every value written to the page with `htmlspecialchars`, checked that the id in the URL matches a real record before rendering, and returned a 404 instead of a blank page. The forms use `required`, `type="date"`, and `maxlength` so bad data is caught early. This is not security on its own, but it establishes the habit before the database arrives.

**Reviewing AI output instead of trusting it.** The first AI pass produced a flat folder, duplicated header markup on every page, and did not include the `includes/` folder we asked for. We rejected that structure, moved shared markup into `includes/header.php`, `nav.php`, and `footer.php`, and organized pages by functional area (`unit/`, `maintenance/`). Two files carried over from an earlier lab were caught in review and replaced because they still referenced tutoring requests, not property management.

**Keeping the scope honest.** The proposal lists two CRUD sets. We built exactly those two, plus the home and login pages, and resisted adding a residents module that the midterm does not ask for. The ERD does include the entities the final will need so that the design work is reused rather than redone.
