# Senior Lifestyle Business: Website

WordPress site for the retirement communities title, one of the five-title wave
of 18 September 2026. Domain `seniorlifestylebusiness.com` (.com only, bought at
GoDaddy; no .co.uk). Slug `senior-lifestyle-business`.

Session prefix: `🏡 SENIOR`

## Naming

**The name may still change.** "Senior Lifestyle" is also the trading name of a
large US senior living operator (Senior Lifestyle Corporation, Chicago), and
the question is with JB. The name is deliberately kept in four places in this
theme: `$name` in the `cogent_brand` filter (functions.php), `Theme Name` in
style.css, and the masthead lockup in `parts/header.html` (visible words and
aria-label). The footer prints the WordPress site title. Folder, slug and file
names stay as they are whatever the name becomes.

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
