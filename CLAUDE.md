# Senior Lifestyle Business: Website

WordPress site for the retirement communities title, one of the five-title wave
of 18 September 2026. Domain `seniorlifestylebusiness.com` (.com only, bought at
GoDaddy; no .co.uk). Slug `senior-lifestyle-business`.

Session prefix: `🏡 SENIOR`

## Naming

**The name is Senior Lifestyle Business** (JB, 23 Sep 2026, final). It launched
under this name on 18 Sep, was renamed to Senior Living Business the same day,
and JB reverted it on 23 Sep so the masthead matches the domain, slug, folder
and jb@ address. Everything now reads Senior Lifestyle Business and nothing
should read Senior Living.

The name lives in `$name` and `lockup_lead` in functions.php, `Theme Name` in
style.css, `SENIOR_NAME` in the brand kit's specs.mjs, `name` in that kit's
install.mjs and linkedin-wave5-logos.mjs, the WordPress site title, the Yoast
site and organisation name, `Site.name` in the fleet app database, and
set-gmail-signatures.mjs. The Mailchimp audience must be renamed to match
exactly: the audience name is derived from `$name`, so a mismatch does not
error, it quietly queues signups in the local Subscribers store.

Why the name was questioned at all: Senior Living News is a live US trade title
serving these exact readers, and it was rejected as a name on 18 Sep for that
reason. Senior Living Business sat one word away from it.

## Layout

| Path | What it is |
|---|---|
| `child/` | Child theme of `cogent-base`; most edits belong here |

The parent theme lives in `cogent-base-theme/cogent-base`; never fork it, and
run its `check-title-agnostic.mjs --all` after touching anything shared (add
this title to TITLES and CHILDREN there first). Deploy with
`node scripts/deploy-theme.mjs --site=senior-lifestyle-business --from=../senior-lifestyle-business-website/child`
from `cogent-incubator` over SFTP, never a zip upload.

## The title rules

The front-door rule, the operator rule, the resident-harm rule and the
no-advice rule (paste-ready block in
`cogent-incubator/docs/senior-lifestyle-business-launch.md`, to go into
`docs/editorial-standard.md`). The front-door rule is the one that matters most:
if the resident has their own front door and a lease, licence or tenancy, it is
ours; a room and a care plan in a CQC-registered care home belongs to CIM's
Care Home Magazine. Never target "care home" or "nursing home" terms.

## Design

Premium property and investment, not care-home soft: aubergine and heather on a
plum-black ink, bronze accent, linen surfaces, Playfair Display as the display
face (the only high-contrast serif among the titles). The heather masthead chip exists because
aubergine vanishes on the ink header. Photography is architecture and
landscape, never stock older couples. A drawn masthead (the
`cogent-base-theme/scripts/brand` kit) is still to do once the name is settled;
until then the typeset lockup stands.

The Playfair file is the variable TTF from the brand kit (300 KB). Converting
it to a subset woff2 would cut it to roughly a fifth; worth doing on the first
design pass.

## Launch tracking

`cogent-incubator/docs/senior-lifestyle-business-launch.md` is the live
checklist. The vertical case is
`cogent-incubator/docs/vertical-brief-retirement-villages.md`.

## Hosting

SiteGround, same as the other titles. Purge the cache after deploying before
deciding a change had no effect, and check the WAF user-agent trap from earlier
launches once the site exists.

## Logo (final, 18 Sep 2026; rebuilt with the Senior Lifestyle wording 23 Sep 2026)

JB chose this title's logo on 18 Sep 2026 and it is live on the site, in the
tab icon, the WordPress site icon and the Yoast publisher logo: S4: SL monogram tile in Burgundy (#7A1F3D) beside Senior Lifestyle / Business in Playfair Display; one-line alternate; tab icon the SL tile. If the name changes, edit SENIOR_NAME in specs.mjs and rebuild.
The site palette was changed to match the same day, so any colour note above
that names the launch scaffold's colour is out of date.

The artwork is generated, never hand-edited: the spec is in
`cogent-base-theme/scripts/brand/specs.mjs`, files are built into its `dist/`
and copied into `child/assets/brand/` by `install.mjs`. Change the spec,
rebuild, reinstall, deploy. Do not redraw, recolour or replace the logo
without JB asking.
