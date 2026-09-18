<?php
/**
 * Child of cogent-base for seniorlifestylebusiness.com.
 *
 * Almost nothing belongs in here. The parent owns the layout, the templates,
 * the patterns and every calculator's arithmetic; this file exists to make the
 * editorial choices that are genuinely this title's.
 *
 * THE NAME MAY CHANGE. It lives in exactly four places in this theme: the
 * $name line in the cogent_brand filter below, style.css's Theme Name, and the
 * masthead lockup in parts/header.html (twice: the visible words and the
 * aria-label). Everything else derives it. The footer prints the WordPress site
 * title, so renaming the site in Settings updates it.
 *
 * @package senior-lifestyle-business
 */

defined( 'ABSPATH' ) || exit;

/*
 * No cogent_tools filter, deliberately. The parent's default is no calculators,
 * and none of the existing tools transfers to a retirement community audience.
 * This title's planned tools are data products, not calculators: the scheme
 * pipeline tracker, the C2/C3 appeal ledger and the UK vs AU/NZ fee benchmark
 * (vertical brief §8). They will be built as directory collections once the
 * archive has published rows to fill them; an empty table pretending to be a
 * tracker is worse than none.
 */

/**
 * Who this title is, in its own words.
 *
 * newsletter_kicker is absent because the parent already builds "<name>
 * Weekly" from the site name, and from_email because it already builds
 * noreply@ from the site's own domain.
 */
add_filter( 'cogent_brand', function ( $brand ) {
	// The one place this file names the title. Change it here if the name
	// changes, and the Mailchimp audience must be renamed to match exactly.
	$name = 'Senior Lifestyle Business';

	$brand['name']  = $name;
	$brand['short'] = $name;

	// Masthead words, matching parts/header.html. The mobile menu builds its
	// lockup from these; the default third line would read MAGAZINE.
	$brand['lockup_lead'] = 'Senior Lifestyle';
	$brand['lockup_mark'] = 'Business';
	$brand['lockup_sub']  = 'RETIREMENT COMMUNITIES';

	$brand['audience'] = 'the people who develop, fund and run retirement communities';

	$brand['newsletter_promise'] = 'Development, capital and operator intelligence for the people who build and run retirement communities.';
	$brand['newsletter_band']    = sprintf( 'The best of %s in your inbox: the scheme pipeline, the capital behind it, planning and fee regulation, and what operators in the UK, Australia and New Zealand are doing next. Free, weekly, no fluff.', $name );
	$brand['article_signup']     = 'One email a week: the pipeline, capital and regulation intelligence retirement community operators and investors actually use.';

	$brand['contact_email'] = 'jb@seniorlifestylebusiness.com';

	/*
	 * Must match the Mailchimp audience name EXACTLY. Until an audience with
	 * this name exists in the account, signups queue in the local Subscribers
	 * store and the mismatch shows on this title's Settings page in wp-admin.
	 * Creating it is a JB step on the launch tracker.
	 */
	$brand['mailchimp_audience'] = $name;

	/*
	 * linkedin_url is deliberately NOT set. No company page exists yet, and the
	 * sidebar card renders nothing until the real URL is pasted here. Never
	 * guess it.
	 */

	$brand['sponsor_promise'] = 'Category sponsorships, newsletter slots and display packages. Talk to us about reaching the developers, operators and investors behind retirement communities.';

	return $brand;
} );

/*
 * No cogent_ga4_id filter yet. The GA4 property is a JB step on the launch
 * tracker; when it exists, verify the property by NAME through the Admin API
 * (never trust the ID in the console URL) and add the filter here, or let Site
 * Kit tag and leave this as the fallback.
 */

/**
 * The byline for this title.
 *
 * The parent forces every post onto one identity so the content engine's own
 * account cannot reach the byline, the author archive or the schema Google
 * reads. Each title names its own person here.
 *
 * james-burke is the placeholder, and it is a real person (JB), which is the
 * standard the editorial rules require. No sponsor has been named for this
 * title yet; when the owner from the five-title wave is confirmed, change the
 * slug to theirs and set the Site row's authorName to match. Order matters
 * (playbook §3): create the WordPress byline user with this exact NICENAME
 * before deploying the theme, or the lookup falls back to the administrator
 * silently. The portrait is found by attachment slug, so the media library
 * needs one image named with this slug.
 */
add_filter( 'cogent_author_slug', function () {
	return 'james-burke';
} );

/**
 * The homepage sections for this title, in home.html render order.
 *
 * The parent's plan only allocates articles to slugs on this list, and a
 * section the plan gave nothing to hides itself, so a missing or wrong list
 * renders the homepage with an empty middle while looking deliberate. Keep it
 * exactly in step with the section patterns home.html renders: a slug listed
 * here but not rendered has its articles reserved and then shown nowhere.
 */
add_filter( 'cogent_home_sections', function () {
	return array( 'news', 'development-planning', 'capital-investment', 'operators-economics', 'fees-regulation', 'sales-marketing', 'design-amenities' );
} );
