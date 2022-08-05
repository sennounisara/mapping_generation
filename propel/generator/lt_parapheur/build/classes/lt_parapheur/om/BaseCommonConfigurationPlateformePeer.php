<?php


/**
 * Base static class for performing query and update operations on the 'configuration_plateforme' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonConfigurationPlateformePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'configuration_plateforme';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonConfigurationPlateforme';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonConfigurationPlateformeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 228;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 228;

    /** the column name for the id_auto field */
    const ID_AUTO = 'configuration_plateforme.id_auto';

    /** the column name for the code_cpv field */
    const CODE_CPV = 'configuration_plateforme.code_cpv';

    /** the column name for the multi_linguisme_entreprise field */
    const MULTI_LINGUISME_ENTREPRISE = 'configuration_plateforme.multi_linguisme_entreprise';

    /** the column name for the gestion_fournisseurs_docs_mes_sous_services field */
    const GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES = 'configuration_plateforme.gestion_fournisseurs_docs_mes_sous_services';

    /** the column name for the authenticate_inscrit_by_cert field */
    const AUTHENTICATE_INSCRIT_BY_CERT = 'configuration_plateforme.authenticate_inscrit_by_cert';

    /** the column name for the authenticate_inscrit_by_login field */
    const AUTHENTICATE_INSCRIT_BY_LOGIN = 'configuration_plateforme.authenticate_inscrit_by_login';

    /** the column name for the base_qualifiee_entreprise_insee field */
    const BASE_QUALIFIEE_ENTREPRISE_INSEE = 'configuration_plateforme.base_qualifiee_entreprise_insee';

    /** the column name for the gestion_boamp_mes_sous_services field */
    const GESTION_BOAMP_MES_SOUS_SERVICES = 'configuration_plateforme.gestion_boamp_mes_sous_services';

    /** the column name for the gestion_bi_cle_mes_sous_services field */
    const GESTION_BI_CLE_MES_SOUS_SERVICES = 'configuration_plateforme.gestion_bi_cle_mes_sous_services';

    /** the column name for the nom_entreprise_toujours_visible field */
    const NOM_ENTREPRISE_TOUJOURS_VISIBLE = 'configuration_plateforme.nom_entreprise_toujours_visible';

    /** the column name for the gestion_jal_mes_sous_services field */
    const GESTION_JAL_MES_SOUS_SERVICES = 'configuration_plateforme.gestion_jal_mes_sous_services';

    /** the column name for the choix_langue_affichage_consultation field */
    const CHOIX_LANGUE_AFFICHAGE_CONSULTATION = 'configuration_plateforme.choix_langue_affichage_consultation';

    /** the column name for the compte_entreprise_donnees_complementaires field */
    const COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES = 'configuration_plateforme.compte_entreprise_donnees_complementaires';

    /** the column name for the annuaire_entites_achat_visible_par_entreprise field */
    const ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE = 'configuration_plateforme.annuaire_entites_achat_visible_par_entreprise';

    /** the column name for the affichage_recherche_avancee_agent_ac_sad_transversaux field */
    const AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX = 'configuration_plateforme.affichage_recherche_avancee_agent_ac_sad_transversaux';

    /** the column name for the encheres_entreprise field */
    const ENCHERES_ENTREPRISE = 'configuration_plateforme.encheres_entreprise';

    /** the column name for the socle_interne field */
    const SOCLE_INTERNE = 'configuration_plateforme.socle_interne';

    /** the column name for the module_certificat field */
    const MODULE_CERTIFICAT = 'configuration_plateforme.module_certificat';

    /** the column name for the socle_externe_agent field */
    const SOCLE_EXTERNE_AGENT = 'configuration_plateforme.socle_externe_agent';

    /** the column name for the afficher_image_organisme field */
    const AFFICHER_IMAGE_ORGANISME = 'configuration_plateforme.afficher_image_organisme';

    /** the column name for the socle_externe_entreprise field */
    const SOCLE_EXTERNE_ENTREPRISE = 'configuration_plateforme.socle_externe_entreprise';

    /** the column name for the portail_defense_entreprise field */
    const PORTAIL_DEFENSE_ENTREPRISE = 'configuration_plateforme.portail_defense_entreprise';

    /** the column name for the compte_entreprise_province field */
    const COMPTE_ENTREPRISE_PROVINCE = 'configuration_plateforme.compte_entreprise_province';

    /** the column name for the compte_entreprise_telephone3 field */
    const COMPTE_ENTREPRISE_TELEPHONE3 = 'configuration_plateforme.compte_entreprise_telephone3';

    /** the column name for the compte_entreprise_tax_prof field */
    const COMPTE_ENTREPRISE_TAX_PROF = 'configuration_plateforme.compte_entreprise_tax_prof';

    /** the column name for the compte_entreprise_rcville field */
    const COMPTE_ENTREPRISE_RCVILLE = 'configuration_plateforme.compte_entreprise_rcville';

    /** the column name for the compte_entreprise_declaration_honneur field */
    const COMPTE_ENTREPRISE_DECLARATION_HONNEUR = 'configuration_plateforme.compte_entreprise_declaration_honneur';

    /** the column name for the compte_entreprise_qualification field */
    const COMPTE_ENTREPRISE_QUALIFICATION = 'configuration_plateforme.compte_entreprise_qualification';

    /** the column name for the compte_entreprise_moyens_techniques field */
    const COMPTE_ENTREPRISE_MOYENS_TECHNIQUES = 'configuration_plateforme.compte_entreprise_moyens_techniques';

    /** the column name for the compte_entreprise_prestations_realisees field */
    const COMPTE_ENTREPRISE_PRESTATIONS_REALISEES = 'configuration_plateforme.compte_entreprise_prestations_realisees';

    /** the column name for the compte_entreprise_chiffre_affaire_production_biens_services field */
    const COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES = 'configuration_plateforme.compte_entreprise_chiffre_affaire_production_biens_services';

    /** the column name for the enveloppe_offre_technique field */
    const ENVELOPPE_OFFRE_TECHNIQUE = 'configuration_plateforme.enveloppe_offre_technique';

    /** the column name for the compte_inscrit_choix_profil field */
    const COMPTE_INSCRIT_CHOIX_PROFIL = 'configuration_plateforme.compte_inscrit_choix_profil';

    /** the column name for the procedure_adaptee field */
    const PROCEDURE_ADAPTEE = 'configuration_plateforme.procedure_adaptee';

    /** the column name for the compte_entreprise_siren field */
    const COMPTE_ENTREPRISE_SIREN = 'configuration_plateforme.compte_entreprise_siren';

    /** the column name for the compte_entreprise_activation_inscription_par_agent field */
    const COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT = 'configuration_plateforme.compte_entreprise_activation_inscription_par_agent';

    /** the column name for the menu_entreprise_consultations_en_cours field */
    const MENU_ENTREPRISE_CONSULTATIONS_EN_COURS = 'configuration_plateforme.menu_entreprise_consultations_en_cours';

    /** the column name for the compte_entreprise_capital_social field */
    const COMPTE_ENTREPRISE_CAPITAL_SOCIAL = 'configuration_plateforme.compte_entreprise_capital_social';

    /** the column name for the mail_activation_compte_inscrit_entreprise field */
    const MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE = 'configuration_plateforme.mail_activation_compte_inscrit_entreprise';

    /** the column name for the decision_date_notification field */
    const DECISION_DATE_NOTIFICATION = 'configuration_plateforme.decision_date_notification';

    /** the column name for the decision_pmi_pme field */
    const DECISION_PMI_PME = 'configuration_plateforme.decision_pmi_pme';

    /** the column name for the decision_nature_prestations field */
    const DECISION_NATURE_PRESTATIONS = 'configuration_plateforme.decision_nature_prestations';

    /** the column name for the decision_objet_marche field */
    const DECISION_OBJET_MARCHE = 'configuration_plateforme.decision_objet_marche';

    /** the column name for the decision_note field */
    const DECISION_NOTE = 'configuration_plateforme.decision_note';

    /** the column name for the decision_fiche_recensement field */
    const DECISION_FICHE_RECENSEMENT = 'configuration_plateforme.decision_fiche_recensement';

    /** the column name for the registre_papier_mail_obligatoire field */
    const REGISTRE_PAPIER_MAIL_OBLIGATOIRE = 'configuration_plateforme.registre_papier_mail_obligatoire';

    /** the column name for the menu_entreprise_indicateurs_cles field */
    const MENU_ENTREPRISE_INDICATEURS_CLES = 'configuration_plateforme.menu_entreprise_indicateurs_cles';

    /** the column name for the ajout_rpa_champ_email field */
    const AJOUT_RPA_CHAMP_EMAIL = 'configuration_plateforme.ajout_rpa_champ_email';

    /** the column name for the ajout_rpa_champ_telephone field */
    const AJOUT_RPA_CHAMP_TELEPHONE = 'configuration_plateforme.ajout_rpa_champ_telephone';

    /** the column name for the ajout_rpa_champ_fax field */
    const AJOUT_RPA_CHAMP_FAX = 'configuration_plateforme.ajout_rpa_champ_fax';

    /** the column name for the entreprise_poser_question_sans_pj field */
    const ENTREPRISE_POSER_QUESTION_SANS_PJ = 'configuration_plateforme.entreprise_poser_question_sans_pj';

    /** the column name for the url_demarche_agent field */
    const URL_DEMARCHE_AGENT = 'configuration_plateforme.url_demarche_agent';

    /** the column name for the url_demarche_entreprise field */
    const URL_DEMARCHE_ENTREPRISE = 'configuration_plateforme.url_demarche_entreprise';

    /** the column name for the siret_detail_entite_achat field */
    const SIRET_DETAIL_ENTITE_ACHAT = 'configuration_plateforme.siret_detail_entite_achat';

    /** the column name for the presence_elu field */
    const PRESENCE_ELU = 'configuration_plateforme.presence_elu';

    /** the column name for the gerer_mon_service field */
    const GERER_MON_SERVICE = 'configuration_plateforme.gerer_mon_service';

    /** the column name for the depouillement_enveloppe_depend_RAT_enveloppe_precedente field */
    const DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE = 'configuration_plateforme.depouillement_enveloppe_depend_RAT_enveloppe_precedente';

    /** the column name for the consultation_adresse_retrais_dossiers field */
    const CONSULTATION_ADRESSE_RETRAIS_DOSSIERS = 'configuration_plateforme.consultation_adresse_retrais_dossiers';

    /** the column name for the consultation_adresse_depot_offres field */
    const CONSULTATION_ADRESSE_DEPOT_OFFRES = 'configuration_plateforme.consultation_adresse_depot_offres';

    /** the column name for the consultation_caution_provisoire field */
    const CONSULTATION_CAUTION_PROVISOIRE = 'configuration_plateforme.consultation_caution_provisoire';

    /** the column name for the consultation_lieu_ouverture_plis field */
    const CONSULTATION_LIEU_OUVERTURE_PLIS = 'configuration_plateforme.consultation_lieu_ouverture_plis';

    /** the column name for the consultation_qualification field */
    const CONSULTATION_QUALIFICATION = 'configuration_plateforme.consultation_qualification';

    /** the column name for the consultation_agrement field */
    const CONSULTATION_AGREMENT = 'configuration_plateforme.consultation_agrement';

    /** the column name for the consultation_echantillons_demandes field */
    const CONSULTATION_ECHANTILLONS_DEMANDES = 'configuration_plateforme.consultation_echantillons_demandes';

    /** the column name for the consultation_reunion field */
    const CONSULTATION_REUNION = 'configuration_plateforme.consultation_reunion';

    /** the column name for the consultation_visite_des_lieux field */
    const CONSULTATION_VISITE_DES_LIEUX = 'configuration_plateforme.consultation_visite_des_lieux';

    /** the column name for the consultation_prix_acquisition field */
    const CONSULTATION_PRIX_ACQUISITION = 'configuration_plateforme.consultation_prix_acquisition';

    /** the column name for the resultat_analyse_avant_decision field */
    const RESULTAT_ANALYSE_AVANT_DECISION = 'configuration_plateforme.resultat_analyse_avant_decision';

    /** the column name for the creation_inscrit_par_ates field */
    const CREATION_INSCRIT_PAR_ATES = 'configuration_plateforme.creation_inscrit_par_ates';

    /** the column name for the consultation_variantes_autorisees field */
    const CONSULTATION_VARIANTES_AUTORISEES = 'configuration_plateforme.consultation_variantes_autorisees';

    /** the column name for the recherche_avancee_par_type_org field */
    const RECHERCHE_AVANCEE_PAR_TYPE_ORG = 'configuration_plateforme.recherche_avancee_par_type_org';

    /** the column name for the menu_agent_societes_exclues field */
    const MENU_AGENT_SOCIETES_EXCLUES = 'configuration_plateforme.menu_agent_societes_exclues';

    /** the column name for the recherche_avancee_par_domaines_activite field */
    const RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE = 'configuration_plateforme.recherche_avancee_par_domaines_activite';

    /** the column name for the recherche_avancee_par_qualification field */
    const RECHERCHE_AVANCEE_PAR_QUALIFICATION = 'configuration_plateforme.recherche_avancee_par_qualification';

    /** the column name for the recherche_avancee_par_agrement field */
    const RECHERCHE_AVANCEE_PAR_AGREMENT = 'configuration_plateforme.recherche_avancee_par_agrement';

    /** the column name for the contact_administratif_dans_detail_consultation_cote_entreprise field */
    const CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE = 'configuration_plateforme.contact_administratif_dans_detail_consultation_cote_entreprise';

    /** the column name for the consultation_pieces_dossiers field */
    const CONSULTATION_PIECES_DOSSIERS = 'configuration_plateforme.consultation_pieces_dossiers';

    /** the column name for the gerer_adresses_service field */
    const GERER_ADRESSES_SERVICE = 'configuration_plateforme.gerer_adresses_service';

    /** the column name for the traduire_annonces field */
    const TRADUIRE_ANNONCES = 'configuration_plateforme.traduire_annonces';

    /** the column name for the afficher_bloc_actions_dans_details_annonces field */
    const AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES = 'configuration_plateforme.afficher_bloc_actions_dans_details_annonces';

    /** the column name for the autoriser_une_seule_reponse_principale_par_entreprise field */
    const AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE = 'configuration_plateforme.autoriser_une_seule_reponse_principale_par_entreprise';

    /** the column name for the generation_avis field */
    const GENERATION_AVIS = 'configuration_plateforme.generation_avis';

    /** the column name for the passation_appliquer_donnees_ensemble_lots field */
    const PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS = 'configuration_plateforme.passation_appliquer_donnees_ensemble_lots';

    /** the column name for the autre_annonce_extrait_pv field */
    const AUTRE_ANNONCE_EXTRAIT_PV = 'configuration_plateforme.autre_annonce_extrait_pv';

    /** the column name for the autre_annonce_rapport_achevement field */
    const AUTRE_ANNONCE_RAPPORT_ACHEVEMENT = 'configuration_plateforme.autre_annonce_rapport_achevement';

    /** the column name for the ajout_fichier_joint_autre_annonce field */
    const AJOUT_FICHIER_JOINT_AUTRE_ANNONCE = 'configuration_plateforme.ajout_fichier_joint_autre_annonce';

    /** the column name for the consultation_mode_passation field */
    const CONSULTATION_MODE_PASSATION = 'configuration_plateforme.consultation_mode_passation';

    /** the column name for the compte_entreprise_identifiant_unique field */
    const COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE = 'configuration_plateforme.compte_entreprise_identifiant_unique';

    /** the column name for the gerer_certificats_agent field */
    const GERER_CERTIFICATS_AGENT = 'configuration_plateforme.gerer_certificats_agent';

    /** the column name for the autre_annonce_programme_previsionnel field */
    const AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL = 'configuration_plateforme.autre_annonce_programme_previsionnel';

    /** the column name for the annuler_consultation field */
    const ANNULER_CONSULTATION = 'configuration_plateforme.annuler_consultation';

    /** the column name for the cfe_entreprise_accessible_par_agent field */
    const CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT = 'configuration_plateforme.cfe_entreprise_accessible_par_agent';

    /** the column name for the compte_entreprise_code_nace_referentiel field */
    const COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL = 'configuration_plateforme.compte_entreprise_code_nace_referentiel';

    /** the column name for the code_nut_lt_referentiel field */
    const CODE_NUT_LT_REFERENTIEL = 'configuration_plateforme.code_nut_lt_referentiel';

    /** the column name for the lieux_execution field */
    const LIEUX_EXECUTION = 'configuration_plateforme.lieux_execution';

    /** the column name for the compte_entreprise_domaine_activite_lt_referentiel field */
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL = 'configuration_plateforme.compte_entreprise_domaine_activite_lt_referentiel';

    /** the column name for the consultation_domaines_activites_lt_referentiel field */
    const CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL = 'configuration_plateforme.consultation_domaines_activites_lt_referentiel';

    /** the column name for the compte_entreprise_agrement_lt_referentiel field */
    const COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL = 'configuration_plateforme.compte_entreprise_agrement_lt_referentiel';

    /** the column name for the compte_entreprise_qualification_lt_referentiel field */
    const COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL = 'configuration_plateforme.compte_entreprise_qualification_lt_referentiel';

    /** the column name for the reponse_pas_a_pas field */
    const REPONSE_PAS_A_PAS = 'configuration_plateforme.reponse_pas_a_pas';

    /** the column name for the agent_controle_format_mot_de_passe field */
    const AGENT_CONTROLE_FORMAT_MOT_DE_PASSE = 'configuration_plateforme.agent_controle_format_mot_de_passe';

    /** the column name for the entreprise_validation_email_inscription field */
    const ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION = 'configuration_plateforme.entreprise_validation_email_inscription';

    /** the column name for the telecharger_dce_avec_authentification field */
    const TELECHARGER_DCE_AVEC_AUTHENTIFICATION = 'configuration_plateforme.telecharger_dce_avec_authentification';

    /** the column name for the authentification_basic field */
    const AUTHENTIFICATION_BASIC = 'configuration_plateforme.authentification_basic';

    /** the column name for the reglement_consultation field */
    const REGLEMENT_CONSULTATION = 'configuration_plateforme.reglement_consultation';

    /** the column name for the annonces_marches field */
    const ANNONCES_MARCHES = 'configuration_plateforme.annonces_marches';

    /** the column name for the cfe_date_fin_validite_obligatoire field */
    const CFE_DATE_FIN_VALIDITE_OBLIGATOIRE = 'configuration_plateforme.cfe_date_fin_validite_obligatoire';

    /** the column name for the associer_documents_cfe_consultation field */
    const ASSOCIER_DOCUMENTS_CFE_CONSULTATION = 'configuration_plateforme.associer_documents_cfe_consultation';

    /** the column name for the compte_entreprise_region field */
    const COMPTE_ENTREPRISE_REGION = 'configuration_plateforme.compte_entreprise_region';

    /** the column name for the compte_entreprise_telephone2 field */
    const COMPTE_ENTREPRISE_TELEPHONE2 = 'configuration_plateforme.compte_entreprise_telephone2';

    /** the column name for the compte_entreprise_cnss field */
    const COMPTE_ENTREPRISE_CNSS = 'configuration_plateforme.compte_entreprise_cnss';

    /** the column name for the compte_entreprise_rcnum field */
    const COMPTE_ENTREPRISE_RCNUM = 'configuration_plateforme.compte_entreprise_rcnum';

    /** the column name for the compte_entreprise_domaine_activite field */
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE = 'configuration_plateforme.compte_entreprise_domaine_activite';

    /** the column name for the compte_inscrit_code_nic field */
    const COMPTE_INSCRIT_CODE_NIC = 'configuration_plateforme.compte_inscrit_code_nic';

    /** the column name for the compte_entreprise_code_ape field */
    const COMPTE_ENTREPRISE_CODE_APE = 'configuration_plateforme.compte_entreprise_code_ape';

    /** the column name for the compte_entreprise_documents_commerciaux field */
    const COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX = 'configuration_plateforme.compte_entreprise_documents_commerciaux';

    /** the column name for the compte_entreprise_agrement field */
    const COMPTE_ENTREPRISE_AGREMENT = 'configuration_plateforme.compte_entreprise_agrement';

    /** the column name for the compte_entreprise_moyens_humains field */
    const COMPTE_ENTREPRISE_MOYENS_HUMAINS = 'configuration_plateforme.compte_entreprise_moyens_humains';

    /** the column name for the compte_entreprise_activite_domaine_defense field */
    const COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE = 'configuration_plateforme.compte_entreprise_activite_domaine_defense';

    /** the column name for the compte_entreprise_donnees_financieres field */
    const COMPTE_ENTREPRISE_DONNEES_FINANCIERES = 'configuration_plateforme.compte_entreprise_donnees_financieres';

    /** the column name for the enveloppe_anonymat field */
    const ENVELOPPE_ANONYMAT = 'configuration_plateforme.enveloppe_anonymat';

    /** the column name for the publicite_format_xml field */
    const PUBLICITE_FORMAT_XML = 'configuration_plateforme.publicite_format_xml';

    /** the column name for the article_133_generation_pf field */
    const ARTICLE_133_GENERATION_PF = 'configuration_plateforme.article_133_generation_pf';

    /** the column name for the entreprise_repondre_consultation_apres_cloture field */
    const ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE = 'configuration_plateforme.entreprise_repondre_consultation_apres_cloture';

    /** the column name for the telechargement_outil_verif_horodatage field */
    const TELECHARGEMENT_OUTIL_VERIF_HORODATAGE = 'configuration_plateforme.telechargement_outil_verif_horodatage';

    /** the column name for the affichage_code_cpv field */
    const AFFICHAGE_CODE_CPV = 'configuration_plateforme.affichage_code_cpv';

    /** the column name for the consultation_domaines_activites field */
    const CONSULTATION_DOMAINES_ACTIVITES = 'configuration_plateforme.consultation_domaines_activites';

    /** the column name for the statistiques_mesure_demat field */
    const STATISTIQUES_MESURE_DEMAT = 'configuration_plateforme.statistiques_mesure_demat';

    /** the column name for the publication_procure field */
    const PUBLICATION_PROCURE = 'configuration_plateforme.publication_procure';

    /** the column name for the menu_entreprise_toutes_les_consultations field */
    const MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS = 'configuration_plateforme.menu_entreprise_toutes_les_consultations';

    /** the column name for the compte_entreprise_cp_obligatoire field */
    const COMPTE_ENTREPRISE_CP_OBLIGATOIRE = 'configuration_plateforme.compte_entreprise_cp_obligatoire';

    /** the column name for the annuler_depot field */
    const ANNULER_DEPOT = 'configuration_plateforme.annuler_depot';

    /** the column name for the traduire_entite_achat_arabe field */
    const TRADUIRE_ENTITE_ACHAT_ARABE = 'configuration_plateforme.traduire_entite_achat_arabe';

    /** the column name for the traduire_organisme_arabe field */
    const TRADUIRE_ORGANISME_ARABE = 'configuration_plateforme.traduire_organisme_arabe';

    /** the column name for the decision_cp field */
    const DECISION_CP = 'configuration_plateforme.decision_cp';

    /** the column name for the decision_tranche_budgetaire field */
    const DECISION_TRANCHE_BUDGETAIRE = 'configuration_plateforme.decision_tranche_budgetaire';

    /** the column name for the decision_classement field */
    const DECISION_CLASSEMENT = 'configuration_plateforme.decision_classement';

    /** the column name for the decision_afficher_detail_candidat_par_defaut field */
    const DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT = 'configuration_plateforme.decision_afficher_detail_candidat_par_defaut';

    /** the column name for the article_133_upload_fichier field */
    const ARTICLE_133_UPLOAD_FICHIER = 'configuration_plateforme.article_133_upload_fichier';

    /** the column name for the multi_linguisme_agent field */
    const MULTI_LINGUISME_AGENT = 'configuration_plateforme.multi_linguisme_agent';

    /** the column name for the compte_entreprise_ifu field */
    const COMPTE_ENTREPRISE_IFU = 'configuration_plateforme.compte_entreprise_ifu';

    /** the column name for the gestion_organisme_par_agent field */
    const GESTION_ORGANISME_PAR_AGENT = 'configuration_plateforme.gestion_organisme_par_agent';

    /** the column name for the utiliser_lucene field */
    const UTILISER_LUCENE = 'configuration_plateforme.utiliser_lucene';

    /** the column name for the utiliser_page_html_lieux_execution field */
    const UTILISER_PAGE_HTML_LIEUX_EXECUTION = 'configuration_plateforme.utiliser_page_html_lieux_execution';

    /** the column name for the prado_validateur_format_date field */
    const PRADO_VALIDATEUR_FORMAT_DATE = 'configuration_plateforme.prado_validateur_format_date';

    /** the column name for the prado_validateur_format_email field */
    const PRADO_VALIDATEUR_FORMAT_EMAIL = 'configuration_plateforme.prado_validateur_format_email';

    /** the column name for the socle_externe_ppp field */
    const SOCLE_EXTERNE_PPP = 'configuration_plateforme.socle_externe_ppp';

    /** the column name for the validation_format_champs_stricte field */
    const VALIDATION_FORMAT_CHAMPS_STRICTE = 'configuration_plateforme.validation_format_champs_stricte';

    /** the column name for the poser_question_necessite_authentification field */
    const POSER_QUESTION_NECESSITE_AUTHENTIFICATION = 'configuration_plateforme.poser_question_necessite_authentification';

    /** the column name for the autoriser_modif_profil_inscrit_ates field */
    const AUTORISER_MODIF_PROFIL_INSCRIT_ATES = 'configuration_plateforme.autoriser_modif_profil_inscrit_ates';

    /** the column name for the unicite_reference_consultation field */
    const UNICITE_REFERENCE_CONSULTATION = 'configuration_plateforme.unicite_reference_consultation';

    /** the column name for the registre_papier_rcnum_rcville_obligatoires field */
    const REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES = 'configuration_plateforme.registre_papier_rcnum_rcville_obligatoires';

    /** the column name for the registre_papier_adresse_cp_ville_obligatoires field */
    const REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES = 'configuration_plateforme.registre_papier_adresse_cp_ville_obligatoires';

    /** the column name for the telecharger_dce_sans_identification field */
    const TELECHARGER_DCE_SANS_IDENTIFICATION = 'configuration_plateforme.telecharger_dce_sans_identification';

    /** the column name for the gestion_entreprise_par_agent field */
    const GESTION_ENTREPRISE_PAR_AGENT = 'configuration_plateforme.gestion_entreprise_par_agent';

    /** the column name for the autoriser_caracteres_speciaux_dans_reference field */
    const AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE = 'configuration_plateforme.autoriser_caracteres_speciaux_dans_reference';

    /** the column name for the inscription_libre_entreprise field */
    const INSCRIPTION_LIBRE_ENTREPRISE = 'configuration_plateforme.inscription_libre_entreprise';

    /** the column name for the afficher_code_service field */
    const AFFICHER_CODE_SERVICE = 'configuration_plateforme.afficher_code_service';

    /** the column name for the authenticate_agent_by_login field */
    const AUTHENTICATE_AGENT_BY_LOGIN = 'configuration_plateforme.authenticate_agent_by_login';

    /** the column name for the authenticate_agent_by_cert field */
    const AUTHENTICATE_AGENT_BY_CERT = 'configuration_plateforme.authenticate_agent_by_cert';

    /** the column name for the generer_acte_dengagement field */
    const GENERER_ACTE_DENGAGEMENT = 'configuration_plateforme.generer_acte_dengagement';

    /** the column name for the entreprise_controle_format_mot_de_passe field */
    const ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE = 'configuration_plateforme.entreprise_controle_format_mot_de_passe';

    /** the column name for the autre_annonce_information field */
    const AUTRE_ANNONCE_INFORMATION = 'configuration_plateforme.autre_annonce_information';

    /** the column name for the creer_autre_annonce field */
    const CREER_AUTRE_ANNONCE = 'configuration_plateforme.creer_autre_annonce';

    /** the column name for the consultation_clause field */
    const CONSULTATION_CLAUSE = 'configuration_plateforme.consultation_clause';

    /** the column name for the panier_entreprise field */
    const PANIER_ENTREPRISE = 'configuration_plateforme.panier_entreprise';

    /** the column name for the parametrage_publicite_par_type_procedure field */
    const PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE = 'configuration_plateforme.parametrage_publicite_par_type_procedure';

    /** the column name for the export_decision field */
    const EXPORT_DECISION = 'configuration_plateforme.export_decision';

    /** the column name for the lieu_ouverture_plis_obligatoire field */
    const LIEU_OUVERTURE_PLIS_OBLIGATOIRE = 'configuration_plateforme.lieu_ouverture_plis_obligatoire';

    /** the column name for the regle_mise_en_ligne_par_entite_coordinatrice field */
    const REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE = 'configuration_plateforme.regle_mise_en_ligne_par_entite_coordinatrice';

    /** the column name for the gestion_newsletter field */
    const GESTION_NEWSLETTER = 'configuration_plateforme.gestion_newsletter';

    /** the column name for the publicite_opoce field */
    const PUBLICITE_OPOCE = 'configuration_plateforme.publicite_opoce';

    /** the column name for the gestion_modeles_formulaire field */
    const GESTION_MODELES_FORMULAIRE = 'configuration_plateforme.gestion_modeles_formulaire';

    /** the column name for the gestion_adresses_facturation_JAL field */
    const GESTION_ADRESSES_FACTURATION_JAL = 'configuration_plateforme.gestion_adresses_facturation_JAL';

    /** the column name for the publicite_marches_en_ligne field */
    const PUBLICITE_MARCHES_EN_LIGNE = 'configuration_plateforme.publicite_marches_en_ligne';

    /** the column name for the dossier_additif field */
    const DOSSIER_ADDITIF = 'configuration_plateforme.dossier_additif';

    /** the column name for the type_marche field */
    const TYPE_MARCHE = 'configuration_plateforme.type_marche';

    /** the column name for the type_prestation field */
    const TYPE_PRESTATION = 'configuration_plateforme.type_prestation';

    /** the column name for the afficher_tjr_bloc_caracteristique_reponse field */
    const AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE = 'configuration_plateforme.afficher_tjr_bloc_caracteristique_reponse';

    /** the column name for the alerte_metier field */
    const ALERTE_METIER = 'configuration_plateforme.alerte_metier';

    /** the column name for the bourse_a_la_sous_traitance field */
    const BOURSE_A_LA_SOUS_TRAITANCE = 'configuration_plateforme.bourse_a_la_sous_traitance';

    /** the column name for the publier_guides field */
    const PUBLIER_GUIDES = 'configuration_plateforme.publier_guides';

    /** the column name for the recherche_auto_completion field */
    const RECHERCHE_AUTO_COMPLETION = 'configuration_plateforme.recherche_auto_completion';

    /** the column name for the statut_compte_entreprise field */
    const STATUT_COMPTE_ENTREPRISE = 'configuration_plateforme.statut_compte_entreprise';

    /** the column name for the gestion_organismes field */
    const GESTION_ORGANISMES = 'configuration_plateforme.gestion_organismes';

    /** the column name for the accueil_entreprise_personnalise field */
    const ACCUEIL_ENTREPRISE_PERSONNALISE = 'configuration_plateforme.accueil_entreprise_personnalise';

    /** the column name for the interface_module_sub field */
    const INTERFACE_MODULE_SUB = 'configuration_plateforme.interface_module_sub';

    /** the column name for the authentification_agent_multi_organismes field */
    const AUTHENTIFICATION_AGENT_MULTI_ORGANISMES = 'configuration_plateforme.authentification_agent_multi_organismes';

    /** the column name for the partager_consultation field */
    const PARTAGER_CONSULTATION = 'configuration_plateforme.partager_consultation';

    /** the column name for the annuaire_acheteurs_publics field */
    const ANNUAIRE_ACHETEURS_PUBLICS = 'configuration_plateforme.annuaire_acheteurs_publics';

    /** the column name for the entreprise_actions_groupees field */
    const ENTREPRISE_ACTIONS_GROUPEES = 'configuration_plateforme.entreprise_actions_groupees';

    /** the column name for the lieux_execution_carte field */
    const LIEUX_EXECUTION_CARTE = 'configuration_plateforme.lieux_execution_carte';

    /** the column name for the surcharge_referentiels field */
    const SURCHARGE_REFERENTIELS = 'configuration_plateforme.surcharge_referentiels';

    /** the column name for the Mode_Restriction_RGS field */
    const MODE_RESTRICTION_RGS = 'configuration_plateforme.Mode_Restriction_RGS';

    /** the column name for the autre_annonce_decision_resiliation field */
    const AUTRE_ANNONCE_DECISION_RESILIATION = 'configuration_plateforme.autre_annonce_decision_resiliation';

    /** the column name for the autre_annonce_synthese_rapport_audit field */
    const AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT = 'configuration_plateforme.autre_annonce_synthese_rapport_audit';

    /** the column name for the fiche_weka field */
    const FICHE_WEKA = 'configuration_plateforme.fiche_weka';

    /** the column name for the generation_automatique_mdp_agent field */
    const GENERATION_AUTOMATIQUE_MDP_AGENT = 'configuration_plateforme.generation_automatique_mdp_agent';

    /** the column name for the generation_automatique_mdp_inscrit field */
    const GENERATION_AUTOMATIQUE_MDP_INSCRIT = 'configuration_plateforme.generation_automatique_mdp_inscrit';

    /** the column name for the liste_ac_rgs field */
    const LISTE_AC_RGS = 'configuration_plateforme.liste_ac_rgs';

    /** the column name for the liste_cons_org field */
    const LISTE_CONS_ORG = 'configuration_plateforme.liste_cons_org';

    /** the column name for the marche_public_simplifie_entreprise field */
    const MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE = 'configuration_plateforme.marche_public_simplifie_entreprise';

    /** the column name for the demande_validation_controleur field */
    const DEMANDE_VALIDATION_CONTROLEUR = 'configuration_plateforme.demande_validation_controleur';

    /** the column name for the acces_exec_contrats field */
    const ACCES_EXEC_CONTRATS = 'configuration_plateforme.acces_exec_contrats';

    /** the column name for the forme_juridique_groupement_attributaire field */
    const FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE = 'configuration_plateforme.forme_juridique_groupement_attributaire';

    /** the column name for the date_limite_remise_plis_obligatoire field */
    const DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE = 'configuration_plateforme.date_limite_remise_plis_obligatoire';

    /** the column name for the modif_type_procedure field */
    const MODIF_TYPE_PROCEDURE = 'configuration_plateforme.modif_type_procedure';

    /** the column name for the donnees_complementaires_procedure field */
    const DONNEES_COMPLEMENTAIRES_PROCEDURE = 'configuration_plateforme.donnees_complementaires_procedure';

    /** the column name for the forme_marche_forme_prix field */
    const FORME_MARCHE_FORME_PRIX = 'configuration_plateforme.forme_marche_forme_prix';

    /** the column name for the controle_unicite_num_marche field */
    const CONTROLE_UNICITE_NUM_MARCHE = 'configuration_plateforme.controle_unicite_num_marche';

    /** the column name for the affichage_num_marche field */
    const AFFICHAGE_NUM_MARCHE = 'configuration_plateforme.affichage_num_marche';

    /** the column name for the affichage_date_fin_marche field */
    const AFFICHAGE_DATE_FIN_MARCHE = 'configuration_plateforme.affichage_date_fin_marche';

    /** the column name for the affichage_ice field */
    const AFFICHAGE_ICE = 'configuration_plateforme.affichage_ice';

    /** the column name for the blocage_depot_hors_delai field */
    const BLOCAGE_DEPOT_HORS_DELAI = 'configuration_plateforme.blocage_depot_hors_delai';

    /** the column name for the activer_suivi_pv field */
    const ACTIVER_SUIVI_PV = 'configuration_plateforme.activer_suivi_pv';

    /** the column name for the captcha_validateur field */
    const CAPTCHA_VALIDATEUR = 'configuration_plateforme.captcha_validateur';

    /** the column name for the decision_depuis_resultat_analyse field */
    const DECISION_DEPUIS_RESULTAT_ANALYSE = 'configuration_plateforme.decision_depuis_resultat_analyse';

    /** the column name for the module_facture field */
    const MODULE_FACTURE = 'configuration_plateforme.module_facture';

    /** the column name for the validation_entreprise_facturation field */
    const VALIDATION_ENTREPRISE_FACTURATION = 'configuration_plateforme.validation_entreprise_facturation';

    /** the column name for the bloquer_depot_si_env_non_depose field */
    const BLOQUER_DEPOT_SI_ENV_NON_DEPOSE = 'configuration_plateforme.bloquer_depot_si_env_non_depose';

    /** the column name for the bloquer_depot_signature_invalide field */
    const BLOQUER_DEPOT_SIGNATURE_INVALIDE = 'configuration_plateforme.bloquer_depot_signature_invalide';

    /** the column name for the consultation_import_lots field */
    const CONSULTATION_IMPORT_LOTS = 'configuration_plateforme.consultation_import_lots';

    /** the column name for the depot_selection_lots field */
    const DEPOT_SELECTION_LOTS = 'configuration_plateforme.depot_selection_lots';

    /** the column name for the modification_lots_apres_mise_en_ligne field */
    const MODIFICATION_LOTS_APRES_MISE_EN_LIGNE = 'configuration_plateforme.modification_lots_apres_mise_en_ligne';

    /** the column name for the filtre_bdf_entreprise_valide field */
    const FILTRE_BDF_ENTREPRISE_VALIDE = 'configuration_plateforme.filtre_bdf_entreprise_valide';

    /** the column name for the affichage_identifiant_fiscale field */
    const AFFICHAGE_IDENTIFIANT_FISCALE = 'configuration_plateforme.affichage_identifiant_fiscale';

    /** the column name for the decision_creer_contrat field */
    const DECISION_CREER_CONTRAT = 'configuration_plateforme.decision_creer_contrat';

    /** the column name for the generation_bi_cle field */
    const GENERATION_BI_CLE = 'configuration_plateforme.generation_bi_cle';

    /** The enumerated values for the code_cpv field */
    const CODE_CPV_0 = '0';
    const CODE_CPV_1 = '1';

    /** The enumerated values for the multi_linguisme_entreprise field */
    const MULTI_LINGUISME_ENTREPRISE_0 = '0';
    const MULTI_LINGUISME_ENTREPRISE_1 = '1';

    /** The enumerated values for the gestion_fournisseurs_docs_mes_sous_services field */
    const GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES_0 = '0';
    const GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES_1 = '1';

    /** The enumerated values for the authenticate_inscrit_by_cert field */
    const AUTHENTICATE_INSCRIT_BY_CERT_0 = '0';
    const AUTHENTICATE_INSCRIT_BY_CERT_1 = '1';

    /** The enumerated values for the authenticate_inscrit_by_login field */
    const AUTHENTICATE_INSCRIT_BY_LOGIN_0 = '0';
    const AUTHENTICATE_INSCRIT_BY_LOGIN_1 = '1';

    /** The enumerated values for the base_qualifiee_entreprise_insee field */
    const BASE_QUALIFIEE_ENTREPRISE_INSEE_0 = '0';
    const BASE_QUALIFIEE_ENTREPRISE_INSEE_1 = '1';

    /** The enumerated values for the gestion_boamp_mes_sous_services field */
    const GESTION_BOAMP_MES_SOUS_SERVICES_0 = '0';
    const GESTION_BOAMP_MES_SOUS_SERVICES_1 = '1';

    /** The enumerated values for the gestion_bi_cle_mes_sous_services field */
    const GESTION_BI_CLE_MES_SOUS_SERVICES_0 = '0';
    const GESTION_BI_CLE_MES_SOUS_SERVICES_1 = '1';

    /** The enumerated values for the nom_entreprise_toujours_visible field */
    const NOM_ENTREPRISE_TOUJOURS_VISIBLE_0 = '0';
    const NOM_ENTREPRISE_TOUJOURS_VISIBLE_1 = '1';

    /** The enumerated values for the gestion_jal_mes_sous_services field */
    const GESTION_JAL_MES_SOUS_SERVICES_0 = '0';
    const GESTION_JAL_MES_SOUS_SERVICES_1 = '1';

    /** The enumerated values for the choix_langue_affichage_consultation field */
    const CHOIX_LANGUE_AFFICHAGE_CONSULTATION_0 = '0';
    const CHOIX_LANGUE_AFFICHAGE_CONSULTATION_1 = '1';

    /** The enumerated values for the compte_entreprise_donnees_complementaires field */
    const COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES_0 = '0';
    const COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES_1 = '1';

    /** The enumerated values for the annuaire_entites_achat_visible_par_entreprise field */
    const ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE_0 = '0';
    const ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE_1 = '1';

    /** The enumerated values for the affichage_recherche_avancee_agent_ac_sad_transversaux field */
    const AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX_0 = '0';
    const AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX_1 = '1';

    /** The enumerated values for the encheres_entreprise field */
    const ENCHERES_ENTREPRISE_0 = '0';
    const ENCHERES_ENTREPRISE_1 = '1';

    /** The enumerated values for the socle_interne field */
    const SOCLE_INTERNE_0 = '0';
    const SOCLE_INTERNE_1 = '1';

    /** The enumerated values for the module_certificat field */
    const MODULE_CERTIFICAT_0 = '0';
    const MODULE_CERTIFICAT_1 = '1';

    /** The enumerated values for the socle_externe_agent field */
    const SOCLE_EXTERNE_AGENT_0 = '0';
    const SOCLE_EXTERNE_AGENT_1 = '1';

    /** The enumerated values for the afficher_image_organisme field */
    const AFFICHER_IMAGE_ORGANISME_0 = '0';
    const AFFICHER_IMAGE_ORGANISME_1 = '1';

    /** The enumerated values for the socle_externe_entreprise field */
    const SOCLE_EXTERNE_ENTREPRISE_0 = '0';
    const SOCLE_EXTERNE_ENTREPRISE_1 = '1';

    /** The enumerated values for the portail_defense_entreprise field */
    const PORTAIL_DEFENSE_ENTREPRISE_0 = '0';
    const PORTAIL_DEFENSE_ENTREPRISE_1 = '1';

    /** The enumerated values for the compte_entreprise_province field */
    const COMPTE_ENTREPRISE_PROVINCE_0 = '0';
    const COMPTE_ENTREPRISE_PROVINCE_1 = '1';

    /** The enumerated values for the compte_entreprise_telephone3 field */
    const COMPTE_ENTREPRISE_TELEPHONE3_0 = '0';
    const COMPTE_ENTREPRISE_TELEPHONE3_1 = '1';

    /** The enumerated values for the compte_entreprise_tax_prof field */
    const COMPTE_ENTREPRISE_TAX_PROF_0 = '0';
    const COMPTE_ENTREPRISE_TAX_PROF_1 = '1';

    /** The enumerated values for the compte_entreprise_rcville field */
    const COMPTE_ENTREPRISE_RCVILLE_0 = '0';
    const COMPTE_ENTREPRISE_RCVILLE_1 = '1';

    /** The enumerated values for the compte_entreprise_declaration_honneur field */
    const COMPTE_ENTREPRISE_DECLARATION_HONNEUR_0 = '0';
    const COMPTE_ENTREPRISE_DECLARATION_HONNEUR_1 = '1';

    /** The enumerated values for the compte_entreprise_qualification field */
    const COMPTE_ENTREPRISE_QUALIFICATION_0 = '0';
    const COMPTE_ENTREPRISE_QUALIFICATION_1 = '1';

    /** The enumerated values for the compte_entreprise_moyens_techniques field */
    const COMPTE_ENTREPRISE_MOYENS_TECHNIQUES_0 = '0';
    const COMPTE_ENTREPRISE_MOYENS_TECHNIQUES_1 = '1';

    /** The enumerated values for the compte_entreprise_prestations_realisees field */
    const COMPTE_ENTREPRISE_PRESTATIONS_REALISEES_0 = '0';
    const COMPTE_ENTREPRISE_PRESTATIONS_REALISEES_1 = '1';

    /** The enumerated values for the compte_entreprise_chiffre_affaire_production_biens_services field */
    const COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES_0 = '0';
    const COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES_1 = '1';

    /** The enumerated values for the enveloppe_offre_technique field */
    const ENVELOPPE_OFFRE_TECHNIQUE_0 = '0';
    const ENVELOPPE_OFFRE_TECHNIQUE_1 = '1';

    /** The enumerated values for the compte_inscrit_choix_profil field */
    const COMPTE_INSCRIT_CHOIX_PROFIL_0 = '0';
    const COMPTE_INSCRIT_CHOIX_PROFIL_1 = '1';

    /** The enumerated values for the procedure_adaptee field */
    const PROCEDURE_ADAPTEE_0 = '0';
    const PROCEDURE_ADAPTEE_1 = '1';

    /** The enumerated values for the compte_entreprise_siren field */
    const COMPTE_ENTREPRISE_SIREN_0 = '0';
    const COMPTE_ENTREPRISE_SIREN_1 = '1';

    /** The enumerated values for the compte_entreprise_activation_inscription_par_agent field */
    const COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT_0 = '0';
    const COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT_1 = '1';

    /** The enumerated values for the menu_entreprise_consultations_en_cours field */
    const MENU_ENTREPRISE_CONSULTATIONS_EN_COURS_0 = '0';
    const MENU_ENTREPRISE_CONSULTATIONS_EN_COURS_1 = '1';

    /** The enumerated values for the compte_entreprise_capital_social field */
    const COMPTE_ENTREPRISE_CAPITAL_SOCIAL_0 = '0';
    const COMPTE_ENTREPRISE_CAPITAL_SOCIAL_1 = '1';

    /** The enumerated values for the mail_activation_compte_inscrit_entreprise field */
    const MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE_0 = '0';
    const MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE_1 = '1';

    /** The enumerated values for the decision_date_notification field */
    const DECISION_DATE_NOTIFICATION_0 = '0';
    const DECISION_DATE_NOTIFICATION_1 = '1';

    /** The enumerated values for the decision_pmi_pme field */
    const DECISION_PMI_PME_0 = '0';
    const DECISION_PMI_PME_1 = '1';

    /** The enumerated values for the decision_nature_prestations field */
    const DECISION_NATURE_PRESTATIONS_0 = '0';
    const DECISION_NATURE_PRESTATIONS_1 = '1';

    /** The enumerated values for the decision_objet_marche field */
    const DECISION_OBJET_MARCHE_0 = '0';
    const DECISION_OBJET_MARCHE_1 = '1';

    /** The enumerated values for the decision_note field */
    const DECISION_NOTE_0 = '0';
    const DECISION_NOTE_1 = '1';

    /** The enumerated values for the decision_fiche_recensement field */
    const DECISION_FICHE_RECENSEMENT_0 = '0';
    const DECISION_FICHE_RECENSEMENT_1 = '1';

    /** The enumerated values for the registre_papier_mail_obligatoire field */
    const REGISTRE_PAPIER_MAIL_OBLIGATOIRE_0 = '0';
    const REGISTRE_PAPIER_MAIL_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the menu_entreprise_indicateurs_cles field */
    const MENU_ENTREPRISE_INDICATEURS_CLES_0 = '0';
    const MENU_ENTREPRISE_INDICATEURS_CLES_1 = '1';

    /** The enumerated values for the ajout_rpa_champ_email field */
    const AJOUT_RPA_CHAMP_EMAIL_0 = '0';
    const AJOUT_RPA_CHAMP_EMAIL_1 = '1';

    /** The enumerated values for the ajout_rpa_champ_telephone field */
    const AJOUT_RPA_CHAMP_TELEPHONE_0 = '0';
    const AJOUT_RPA_CHAMP_TELEPHONE_1 = '1';

    /** The enumerated values for the ajout_rpa_champ_fax field */
    const AJOUT_RPA_CHAMP_FAX_0 = '0';
    const AJOUT_RPA_CHAMP_FAX_1 = '1';

    /** The enumerated values for the entreprise_poser_question_sans_pj field */
    const ENTREPRISE_POSER_QUESTION_SANS_PJ_0 = '0';
    const ENTREPRISE_POSER_QUESTION_SANS_PJ_1 = '1';

    /** The enumerated values for the url_demarche_agent field */
    const URL_DEMARCHE_AGENT_0 = '0';
    const URL_DEMARCHE_AGENT_1 = '1';

    /** The enumerated values for the url_demarche_entreprise field */
    const URL_DEMARCHE_ENTREPRISE_0 = '0';
    const URL_DEMARCHE_ENTREPRISE_1 = '1';

    /** The enumerated values for the siret_detail_entite_achat field */
    const SIRET_DETAIL_ENTITE_ACHAT_0 = '0';
    const SIRET_DETAIL_ENTITE_ACHAT_1 = '1';

    /** The enumerated values for the presence_elu field */
    const PRESENCE_ELU_0 = '0';
    const PRESENCE_ELU_1 = '1';

    /** The enumerated values for the gerer_mon_service field */
    const GERER_MON_SERVICE_0 = '0';
    const GERER_MON_SERVICE_1 = '1';

    /** The enumerated values for the depouillement_enveloppe_depend_RAT_enveloppe_precedente field */
    const DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE_0 = '0';
    const DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE_1 = '1';

    /** The enumerated values for the consultation_adresse_retrais_dossiers field */
    const CONSULTATION_ADRESSE_RETRAIS_DOSSIERS_0 = '0';
    const CONSULTATION_ADRESSE_RETRAIS_DOSSIERS_1 = '1';

    /** The enumerated values for the consultation_adresse_depot_offres field */
    const CONSULTATION_ADRESSE_DEPOT_OFFRES_0 = '0';
    const CONSULTATION_ADRESSE_DEPOT_OFFRES_1 = '1';

    /** The enumerated values for the consultation_caution_provisoire field */
    const CONSULTATION_CAUTION_PROVISOIRE_0 = '0';
    const CONSULTATION_CAUTION_PROVISOIRE_1 = '1';

    /** The enumerated values for the consultation_lieu_ouverture_plis field */
    const CONSULTATION_LIEU_OUVERTURE_PLIS_0 = '0';
    const CONSULTATION_LIEU_OUVERTURE_PLIS_1 = '1';

    /** The enumerated values for the consultation_qualification field */
    const CONSULTATION_QUALIFICATION_0 = '0';
    const CONSULTATION_QUALIFICATION_1 = '1';

    /** The enumerated values for the consultation_agrement field */
    const CONSULTATION_AGREMENT_0 = '0';
    const CONSULTATION_AGREMENT_1 = '1';

    /** The enumerated values for the consultation_echantillons_demandes field */
    const CONSULTATION_ECHANTILLONS_DEMANDES_0 = '0';
    const CONSULTATION_ECHANTILLONS_DEMANDES_1 = '1';

    /** The enumerated values for the consultation_reunion field */
    const CONSULTATION_REUNION_0 = '0';
    const CONSULTATION_REUNION_1 = '1';

    /** The enumerated values for the consultation_visite_des_lieux field */
    const CONSULTATION_VISITE_DES_LIEUX_0 = '0';
    const CONSULTATION_VISITE_DES_LIEUX_1 = '1';

    /** The enumerated values for the consultation_prix_acquisition field */
    const CONSULTATION_PRIX_ACQUISITION_0 = '0';
    const CONSULTATION_PRIX_ACQUISITION_1 = '1';

    /** The enumerated values for the resultat_analyse_avant_decision field */
    const RESULTAT_ANALYSE_AVANT_DECISION_0 = '0';
    const RESULTAT_ANALYSE_AVANT_DECISION_1 = '1';

    /** The enumerated values for the creation_inscrit_par_ates field */
    const CREATION_INSCRIT_PAR_ATES_0 = '0';
    const CREATION_INSCRIT_PAR_ATES_1 = '1';

    /** The enumerated values for the consultation_variantes_autorisees field */
    const CONSULTATION_VARIANTES_AUTORISEES_0 = '0';
    const CONSULTATION_VARIANTES_AUTORISEES_1 = '1';

    /** The enumerated values for the recherche_avancee_par_type_org field */
    const RECHERCHE_AVANCEE_PAR_TYPE_ORG_0 = '0';
    const RECHERCHE_AVANCEE_PAR_TYPE_ORG_1 = '1';

    /** The enumerated values for the menu_agent_societes_exclues field */
    const MENU_AGENT_SOCIETES_EXCLUES_0 = '0';
    const MENU_AGENT_SOCIETES_EXCLUES_1 = '1';

    /** The enumerated values for the recherche_avancee_par_domaines_activite field */
    const RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE_0 = '0';
    const RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE_1 = '1';

    /** The enumerated values for the recherche_avancee_par_qualification field */
    const RECHERCHE_AVANCEE_PAR_QUALIFICATION_0 = '0';
    const RECHERCHE_AVANCEE_PAR_QUALIFICATION_1 = '1';

    /** The enumerated values for the recherche_avancee_par_agrement field */
    const RECHERCHE_AVANCEE_PAR_AGREMENT_0 = '0';
    const RECHERCHE_AVANCEE_PAR_AGREMENT_1 = '1';

    /** The enumerated values for the contact_administratif_dans_detail_consultation_cote_entreprise field */
    const CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE_0 = '0';
    const CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE_1 = '1';

    /** The enumerated values for the consultation_pieces_dossiers field */
    const CONSULTATION_PIECES_DOSSIERS_0 = '0';
    const CONSULTATION_PIECES_DOSSIERS_1 = '1';

    /** The enumerated values for the gerer_adresses_service field */
    const GERER_ADRESSES_SERVICE_0 = '0';
    const GERER_ADRESSES_SERVICE_1 = '1';

    /** The enumerated values for the traduire_annonces field */
    const TRADUIRE_ANNONCES_0 = '0';
    const TRADUIRE_ANNONCES_1 = '1';

    /** The enumerated values for the afficher_bloc_actions_dans_details_annonces field */
    const AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES_0 = '0';
    const AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES_1 = '1';

    /** The enumerated values for the autoriser_une_seule_reponse_principale_par_entreprise field */
    const AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE_0 = '0';
    const AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE_1 = '1';

    /** The enumerated values for the generation_avis field */
    const GENERATION_AVIS_0 = '0';
    const GENERATION_AVIS_1 = '1';

    /** The enumerated values for the passation_appliquer_donnees_ensemble_lots field */
    const PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS_0 = '0';
    const PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS_1 = '1';

    /** The enumerated values for the autre_annonce_extrait_pv field */
    const AUTRE_ANNONCE_EXTRAIT_PV_0 = '0';
    const AUTRE_ANNONCE_EXTRAIT_PV_1 = '1';

    /** The enumerated values for the autre_annonce_rapport_achevement field */
    const AUTRE_ANNONCE_RAPPORT_ACHEVEMENT_0 = '0';
    const AUTRE_ANNONCE_RAPPORT_ACHEVEMENT_1 = '1';

    /** The enumerated values for the ajout_fichier_joint_autre_annonce field */
    const AJOUT_FICHIER_JOINT_AUTRE_ANNONCE_0 = '0';
    const AJOUT_FICHIER_JOINT_AUTRE_ANNONCE_1 = '1';

    /** The enumerated values for the consultation_mode_passation field */
    const CONSULTATION_MODE_PASSATION_0 = '0';
    const CONSULTATION_MODE_PASSATION_1 = '1';

    /** The enumerated values for the compte_entreprise_identifiant_unique field */
    const COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE_0 = '0';
    const COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE_1 = '1';

    /** The enumerated values for the gerer_certificats_agent field */
    const GERER_CERTIFICATS_AGENT_0 = '0';
    const GERER_CERTIFICATS_AGENT_1 = '1';

    /** The enumerated values for the autre_annonce_programme_previsionnel field */
    const AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL_0 = '0';
    const AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL_1 = '1';

    /** The enumerated values for the annuler_consultation field */
    const ANNULER_CONSULTATION_0 = '0';
    const ANNULER_CONSULTATION_1 = '1';

    /** The enumerated values for the cfe_entreprise_accessible_par_agent field */
    const CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT_0 = '0';
    const CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT_1 = '1';

    /** The enumerated values for the compte_entreprise_code_nace_referentiel field */
    const COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL_0 = '0';
    const COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL_1 = '1';

    /** The enumerated values for the code_nut_lt_referentiel field */
    const CODE_NUT_LT_REFERENTIEL_0 = '0';
    const CODE_NUT_LT_REFERENTIEL_1 = '1';

    /** The enumerated values for the lieux_execution field */
    const LIEUX_EXECUTION_0 = '0';
    const LIEUX_EXECUTION_1 = '1';

    /** The enumerated values for the compte_entreprise_domaine_activite_lt_referentiel field */
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL_0 = '0';
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL_1 = '1';

    /** The enumerated values for the consultation_domaines_activites_lt_referentiel field */
    const CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL_0 = '0';
    const CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL_1 = '1';

    /** The enumerated values for the compte_entreprise_agrement_lt_referentiel field */
    const COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL_0 = '0';
    const COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL_1 = '1';

    /** The enumerated values for the compte_entreprise_qualification_lt_referentiel field */
    const COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL_0 = '0';
    const COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL_1 = '1';

    /** The enumerated values for the reponse_pas_a_pas field */
    const REPONSE_PAS_A_PAS_0 = '0';
    const REPONSE_PAS_A_PAS_1 = '1';

    /** The enumerated values for the agent_controle_format_mot_de_passe field */
    const AGENT_CONTROLE_FORMAT_MOT_DE_PASSE_0 = '0';
    const AGENT_CONTROLE_FORMAT_MOT_DE_PASSE_1 = '1';

    /** The enumerated values for the entreprise_validation_email_inscription field */
    const ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION_0 = '0';
    const ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION_1 = '1';

    /** The enumerated values for the telecharger_dce_avec_authentification field */
    const TELECHARGER_DCE_AVEC_AUTHENTIFICATION_0 = '0';
    const TELECHARGER_DCE_AVEC_AUTHENTIFICATION_1 = '1';

    /** The enumerated values for the authentification_basic field */
    const AUTHENTIFICATION_BASIC_0 = '0';
    const AUTHENTIFICATION_BASIC_1 = '1';

    /** The enumerated values for the reglement_consultation field */
    const REGLEMENT_CONSULTATION_0 = '0';
    const REGLEMENT_CONSULTATION_1 = '1';

    /** The enumerated values for the annonces_marches field */
    const ANNONCES_MARCHES_0 = '0';
    const ANNONCES_MARCHES_1 = '1';

    /** The enumerated values for the cfe_date_fin_validite_obligatoire field */
    const CFE_DATE_FIN_VALIDITE_OBLIGATOIRE_0 = '0';
    const CFE_DATE_FIN_VALIDITE_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the associer_documents_cfe_consultation field */
    const ASSOCIER_DOCUMENTS_CFE_CONSULTATION_0 = '0';
    const ASSOCIER_DOCUMENTS_CFE_CONSULTATION_1 = '1';

    /** The enumerated values for the compte_entreprise_region field */
    const COMPTE_ENTREPRISE_REGION_0 = '0';
    const COMPTE_ENTREPRISE_REGION_1 = '1';

    /** The enumerated values for the compte_entreprise_telephone2 field */
    const COMPTE_ENTREPRISE_TELEPHONE2_0 = '0';
    const COMPTE_ENTREPRISE_TELEPHONE2_1 = '1';

    /** The enumerated values for the compte_entreprise_cnss field */
    const COMPTE_ENTREPRISE_CNSS_0 = '0';
    const COMPTE_ENTREPRISE_CNSS_1 = '1';

    /** The enumerated values for the compte_entreprise_rcnum field */
    const COMPTE_ENTREPRISE_RCNUM_0 = '0';
    const COMPTE_ENTREPRISE_RCNUM_1 = '1';

    /** The enumerated values for the compte_entreprise_domaine_activite field */
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_0 = '0';
    const COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_1 = '1';

    /** The enumerated values for the compte_inscrit_code_nic field */
    const COMPTE_INSCRIT_CODE_NIC_0 = '0';
    const COMPTE_INSCRIT_CODE_NIC_1 = '1';

    /** The enumerated values for the compte_entreprise_code_ape field */
    const COMPTE_ENTREPRISE_CODE_APE_0 = '0';
    const COMPTE_ENTREPRISE_CODE_APE_1 = '1';

    /** The enumerated values for the compte_entreprise_documents_commerciaux field */
    const COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX_0 = '0';
    const COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX_1 = '1';

    /** The enumerated values for the compte_entreprise_agrement field */
    const COMPTE_ENTREPRISE_AGREMENT_0 = '0';
    const COMPTE_ENTREPRISE_AGREMENT_1 = '1';

    /** The enumerated values for the compte_entreprise_moyens_humains field */
    const COMPTE_ENTREPRISE_MOYENS_HUMAINS_0 = '0';
    const COMPTE_ENTREPRISE_MOYENS_HUMAINS_1 = '1';

    /** The enumerated values for the compte_entreprise_activite_domaine_defense field */
    const COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE_0 = '0';
    const COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE_1 = '1';

    /** The enumerated values for the compte_entreprise_donnees_financieres field */
    const COMPTE_ENTREPRISE_DONNEES_FINANCIERES_0 = '0';
    const COMPTE_ENTREPRISE_DONNEES_FINANCIERES_1 = '1';

    /** The enumerated values for the enveloppe_anonymat field */
    const ENVELOPPE_ANONYMAT_0 = '0';
    const ENVELOPPE_ANONYMAT_1 = '1';

    /** The enumerated values for the publicite_format_xml field */
    const PUBLICITE_FORMAT_XML_0 = '0';
    const PUBLICITE_FORMAT_XML_1 = '1';

    /** The enumerated values for the article_133_generation_pf field */
    const ARTICLE_133_GENERATION_PF_0 = '0';
    const ARTICLE_133_GENERATION_PF_1 = '1';

    /** The enumerated values for the entreprise_repondre_consultation_apres_cloture field */
    const ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE_0 = '0';
    const ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE_1 = '1';

    /** The enumerated values for the telechargement_outil_verif_horodatage field */
    const TELECHARGEMENT_OUTIL_VERIF_HORODATAGE_0 = '0';
    const TELECHARGEMENT_OUTIL_VERIF_HORODATAGE_1 = '1';

    /** The enumerated values for the affichage_code_cpv field */
    const AFFICHAGE_CODE_CPV_0 = '0';
    const AFFICHAGE_CODE_CPV_1 = '1';

    /** The enumerated values for the consultation_domaines_activites field */
    const CONSULTATION_DOMAINES_ACTIVITES_0 = '0';
    const CONSULTATION_DOMAINES_ACTIVITES_1 = '1';

    /** The enumerated values for the statistiques_mesure_demat field */
    const STATISTIQUES_MESURE_DEMAT_0 = '0';
    const STATISTIQUES_MESURE_DEMAT_1 = '1';

    /** The enumerated values for the publication_procure field */
    const PUBLICATION_PROCURE_0 = '0';
    const PUBLICATION_PROCURE_1 = '1';

    /** The enumerated values for the menu_entreprise_toutes_les_consultations field */
    const MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS_0 = '0';
    const MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS_1 = '1';

    /** The enumerated values for the compte_entreprise_cp_obligatoire field */
    const COMPTE_ENTREPRISE_CP_OBLIGATOIRE_0 = '0';
    const COMPTE_ENTREPRISE_CP_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the annuler_depot field */
    const ANNULER_DEPOT_0 = '0';
    const ANNULER_DEPOT_1 = '1';

    /** The enumerated values for the traduire_entite_achat_arabe field */
    const TRADUIRE_ENTITE_ACHAT_ARABE_0 = '0';
    const TRADUIRE_ENTITE_ACHAT_ARABE_1 = '1';

    /** The enumerated values for the traduire_organisme_arabe field */
    const TRADUIRE_ORGANISME_ARABE_0 = '0';
    const TRADUIRE_ORGANISME_ARABE_1 = '1';

    /** The enumerated values for the decision_cp field */
    const DECISION_CP_0 = '0';
    const DECISION_CP_1 = '1';

    /** The enumerated values for the decision_tranche_budgetaire field */
    const DECISION_TRANCHE_BUDGETAIRE_0 = '0';
    const DECISION_TRANCHE_BUDGETAIRE_1 = '1';

    /** The enumerated values for the decision_classement field */
    const DECISION_CLASSEMENT_0 = '0';
    const DECISION_CLASSEMENT_1 = '1';

    /** The enumerated values for the decision_afficher_detail_candidat_par_defaut field */
    const DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT_0 = '0';
    const DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT_1 = '1';

    /** The enumerated values for the article_133_upload_fichier field */
    const ARTICLE_133_UPLOAD_FICHIER_0 = '0';
    const ARTICLE_133_UPLOAD_FICHIER_1 = '1';

    /** The enumerated values for the multi_linguisme_agent field */
    const MULTI_LINGUISME_AGENT_0 = '0';
    const MULTI_LINGUISME_AGENT_1 = '1';

    /** The enumerated values for the compte_entreprise_ifu field */
    const COMPTE_ENTREPRISE_IFU_0 = '0';
    const COMPTE_ENTREPRISE_IFU_1 = '1';

    /** The enumerated values for the gestion_organisme_par_agent field */
    const GESTION_ORGANISME_PAR_AGENT_0 = '0';
    const GESTION_ORGANISME_PAR_AGENT_1 = '1';

    /** The enumerated values for the utiliser_lucene field */
    const UTILISER_LUCENE_0 = '0';
    const UTILISER_LUCENE_1 = '1';

    /** The enumerated values for the utiliser_page_html_lieux_execution field */
    const UTILISER_PAGE_HTML_LIEUX_EXECUTION_0 = '0';
    const UTILISER_PAGE_HTML_LIEUX_EXECUTION_1 = '1';

    /** The enumerated values for the prado_validateur_format_date field */
    const PRADO_VALIDATEUR_FORMAT_DATE_0 = '0';
    const PRADO_VALIDATEUR_FORMAT_DATE_1 = '1';

    /** The enumerated values for the prado_validateur_format_email field */
    const PRADO_VALIDATEUR_FORMAT_EMAIL_0 = '0';
    const PRADO_VALIDATEUR_FORMAT_EMAIL_1 = '1';

    /** The enumerated values for the socle_externe_ppp field */
    const SOCLE_EXTERNE_PPP_0 = '0';
    const SOCLE_EXTERNE_PPP_1 = '1';

    /** The enumerated values for the validation_format_champs_stricte field */
    const VALIDATION_FORMAT_CHAMPS_STRICTE_0 = '0';
    const VALIDATION_FORMAT_CHAMPS_STRICTE_1 = '1';

    /** The enumerated values for the poser_question_necessite_authentification field */
    const POSER_QUESTION_NECESSITE_AUTHENTIFICATION_0 = '0';
    const POSER_QUESTION_NECESSITE_AUTHENTIFICATION_1 = '1';

    /** The enumerated values for the autoriser_modif_profil_inscrit_ates field */
    const AUTORISER_MODIF_PROFIL_INSCRIT_ATES_0 = '0';
    const AUTORISER_MODIF_PROFIL_INSCRIT_ATES_1 = '1';

    /** The enumerated values for the unicite_reference_consultation field */
    const UNICITE_REFERENCE_CONSULTATION_0 = '0';
    const UNICITE_REFERENCE_CONSULTATION_1 = '1';

    /** The enumerated values for the registre_papier_rcnum_rcville_obligatoires field */
    const REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES_0 = '0';
    const REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES_1 = '1';

    /** The enumerated values for the registre_papier_adresse_cp_ville_obligatoires field */
    const REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES_0 = '0';
    const REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES_1 = '1';

    /** The enumerated values for the telecharger_dce_sans_identification field */
    const TELECHARGER_DCE_SANS_IDENTIFICATION_0 = '0';
    const TELECHARGER_DCE_SANS_IDENTIFICATION_1 = '1';

    /** The enumerated values for the gestion_entreprise_par_agent field */
    const GESTION_ENTREPRISE_PAR_AGENT_0 = '0';
    const GESTION_ENTREPRISE_PAR_AGENT_1 = '1';

    /** The enumerated values for the autoriser_caracteres_speciaux_dans_reference field */
    const AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE_0 = '0';
    const AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE_1 = '1';

    /** The enumerated values for the inscription_libre_entreprise field */
    const INSCRIPTION_LIBRE_ENTREPRISE_0 = '0';
    const INSCRIPTION_LIBRE_ENTREPRISE_1 = '1';

    /** The enumerated values for the afficher_code_service field */
    const AFFICHER_CODE_SERVICE_0 = '0';
    const AFFICHER_CODE_SERVICE_1 = '1';

    /** The enumerated values for the authenticate_agent_by_login field */
    const AUTHENTICATE_AGENT_BY_LOGIN_0 = '0';
    const AUTHENTICATE_AGENT_BY_LOGIN_1 = '1';

    /** The enumerated values for the authenticate_agent_by_cert field */
    const AUTHENTICATE_AGENT_BY_CERT_0 = '0';
    const AUTHENTICATE_AGENT_BY_CERT_1 = '1';

    /** The enumerated values for the generer_acte_dengagement field */
    const GENERER_ACTE_DENGAGEMENT_0 = '0';
    const GENERER_ACTE_DENGAGEMENT_1 = '1';

    /** The enumerated values for the entreprise_controle_format_mot_de_passe field */
    const ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE_0 = '0';
    const ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE_1 = '1';

    /** The enumerated values for the autre_annonce_information field */
    const AUTRE_ANNONCE_INFORMATION_0 = '0';
    const AUTRE_ANNONCE_INFORMATION_1 = '1';

    /** The enumerated values for the creer_autre_annonce field */
    const CREER_AUTRE_ANNONCE_0 = '0';
    const CREER_AUTRE_ANNONCE_1 = '1';

    /** The enumerated values for the consultation_clause field */
    const CONSULTATION_CLAUSE_0 = '0';
    const CONSULTATION_CLAUSE_1 = '1';

    /** The enumerated values for the panier_entreprise field */
    const PANIER_ENTREPRISE_0 = '0';
    const PANIER_ENTREPRISE_1 = '1';

    /** The enumerated values for the parametrage_publicite_par_type_procedure field */
    const PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE_0 = '0';
    const PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE_1 = '1';

    /** The enumerated values for the export_decision field */
    const EXPORT_DECISION_0 = '0';
    const EXPORT_DECISION_1 = '1';

    /** The enumerated values for the lieu_ouverture_plis_obligatoire field */
    const LIEU_OUVERTURE_PLIS_OBLIGATOIRE_0 = '0';
    const LIEU_OUVERTURE_PLIS_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the regle_mise_en_ligne_par_entite_coordinatrice field */
    const REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE_0 = '0';
    const REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE_1 = '1';

    /** The enumerated values for the gestion_newsletter field */
    const GESTION_NEWSLETTER_0 = '0';
    const GESTION_NEWSLETTER_1 = '1';

    /** The enumerated values for the publicite_opoce field */
    const PUBLICITE_OPOCE_0 = '0';
    const PUBLICITE_OPOCE_1 = '1';

    /** The enumerated values for the gestion_modeles_formulaire field */
    const GESTION_MODELES_FORMULAIRE_0 = '0';
    const GESTION_MODELES_FORMULAIRE_1 = '1';

    /** The enumerated values for the gestion_adresses_facturation_JAL field */
    const GESTION_ADRESSES_FACTURATION_JAL_0 = '0';
    const GESTION_ADRESSES_FACTURATION_JAL_1 = '1';

    /** The enumerated values for the publicite_marches_en_ligne field */
    const PUBLICITE_MARCHES_EN_LIGNE_0 = '0';
    const PUBLICITE_MARCHES_EN_LIGNE_1 = '1';

    /** The enumerated values for the dossier_additif field */
    const DOSSIER_ADDITIF_0 = '0';
    const DOSSIER_ADDITIF_1 = '1';

    /** The enumerated values for the type_marche field */
    const TYPE_MARCHE_0 = '0';
    const TYPE_MARCHE_1 = '1';

    /** The enumerated values for the type_prestation field */
    const TYPE_PRESTATION_0 = '0';
    const TYPE_PRESTATION_1 = '1';

    /** The enumerated values for the afficher_tjr_bloc_caracteristique_reponse field */
    const AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE_0 = '0';
    const AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE_1 = '1';

    /** The enumerated values for the alerte_metier field */
    const ALERTE_METIER_0 = '0';
    const ALERTE_METIER_1 = '1';

    /** The enumerated values for the bourse_a_la_sous_traitance field */
    const BOURSE_A_LA_SOUS_TRAITANCE_0 = '0';
    const BOURSE_A_LA_SOUS_TRAITANCE_1 = '1';

    /** The enumerated values for the publier_guides field */
    const PUBLIER_GUIDES_0 = '0';
    const PUBLIER_GUIDES_1 = '1';

    /** The enumerated values for the recherche_auto_completion field */
    const RECHERCHE_AUTO_COMPLETION_0 = '0';
    const RECHERCHE_AUTO_COMPLETION_1 = '1';

    /** The enumerated values for the statut_compte_entreprise field */
    const STATUT_COMPTE_ENTREPRISE_0 = '0';
    const STATUT_COMPTE_ENTREPRISE_1 = '1';

    /** The enumerated values for the gestion_organismes field */
    const GESTION_ORGANISMES_0 = '0';
    const GESTION_ORGANISMES_1 = '1';

    /** The enumerated values for the accueil_entreprise_personnalise field */
    const ACCUEIL_ENTREPRISE_PERSONNALISE_0 = '0';
    const ACCUEIL_ENTREPRISE_PERSONNALISE_1 = '1';

    /** The enumerated values for the interface_module_sub field */
    const INTERFACE_MODULE_SUB_0 = '0';
    const INTERFACE_MODULE_SUB_1 = '1';

    /** The enumerated values for the authentification_agent_multi_organismes field */
    const AUTHENTIFICATION_AGENT_MULTI_ORGANISMES_0 = '0';
    const AUTHENTIFICATION_AGENT_MULTI_ORGANISMES_1 = '1';

    /** The enumerated values for the partager_consultation field */
    const PARTAGER_CONSULTATION_0 = '0';
    const PARTAGER_CONSULTATION_1 = '1';

    /** The enumerated values for the annuaire_acheteurs_publics field */
    const ANNUAIRE_ACHETEURS_PUBLICS_0 = '0';
    const ANNUAIRE_ACHETEURS_PUBLICS_1 = '1';

    /** The enumerated values for the entreprise_actions_groupees field */
    const ENTREPRISE_ACTIONS_GROUPEES_0 = '0';
    const ENTREPRISE_ACTIONS_GROUPEES_1 = '1';

    /** The enumerated values for the lieux_execution_carte field */
    const LIEUX_EXECUTION_CARTE_0 = '0';
    const LIEUX_EXECUTION_CARTE_1 = '1';

    /** The enumerated values for the surcharge_referentiels field */
    const SURCHARGE_REFERENTIELS_0 = '0';
    const SURCHARGE_REFERENTIELS_1 = '1';

    /** The enumerated values for the Mode_Restriction_RGS field */
    const MODE_RESTRICTION_RGS_0 = '0';
    const MODE_RESTRICTION_RGS_1 = '1';

    /** The enumerated values for the autre_annonce_decision_resiliation field */
    const AUTRE_ANNONCE_DECISION_RESILIATION_0 = '0';
    const AUTRE_ANNONCE_DECISION_RESILIATION_1 = '1';

    /** The enumerated values for the autre_annonce_synthese_rapport_audit field */
    const AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT_0 = '0';
    const AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT_1 = '1';

    /** The enumerated values for the fiche_weka field */
    const FICHE_WEKA_0 = '0';
    const FICHE_WEKA_1 = '1';

    /** The enumerated values for the generation_automatique_mdp_agent field */
    const GENERATION_AUTOMATIQUE_MDP_AGENT_0 = '0';
    const GENERATION_AUTOMATIQUE_MDP_AGENT_1 = '1';

    /** The enumerated values for the generation_automatique_mdp_inscrit field */
    const GENERATION_AUTOMATIQUE_MDP_INSCRIT_0 = '0';
    const GENERATION_AUTOMATIQUE_MDP_INSCRIT_1 = '1';

    /** The enumerated values for the liste_ac_rgs field */
    const LISTE_AC_RGS_0 = '0';
    const LISTE_AC_RGS_1 = '1';

    /** The enumerated values for the liste_cons_org field */
    const LISTE_CONS_ORG_0 = '0';
    const LISTE_CONS_ORG_1 = '1';

    /** The enumerated values for the marche_public_simplifie_entreprise field */
    const MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE_0 = '0';
    const MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE_1 = '1';

    /** The enumerated values for the demande_validation_controleur field */
    const DEMANDE_VALIDATION_CONTROLEUR_0 = '0';
    const DEMANDE_VALIDATION_CONTROLEUR_1 = '1';

    /** The enumerated values for the acces_exec_contrats field */
    const ACCES_EXEC_CONTRATS_0 = '0';
    const ACCES_EXEC_CONTRATS_1 = '1';

    /** The enumerated values for the forme_juridique_groupement_attributaire field */
    const FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE_0 = '0';
    const FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE_1 = '1';

    /** The enumerated values for the date_limite_remise_plis_obligatoire field */
    const DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE_0 = '0';
    const DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE_1 = '1';

    /** The enumerated values for the modif_type_procedure field */
    const MODIF_TYPE_PROCEDURE_0 = '0';
    const MODIF_TYPE_PROCEDURE_1 = '1';

    /** The enumerated values for the donnees_complementaires_procedure field */
    const DONNEES_COMPLEMENTAIRES_PROCEDURE_0 = '0';
    const DONNEES_COMPLEMENTAIRES_PROCEDURE_1 = '1';

    /** The enumerated values for the forme_marche_forme_prix field */
    const FORME_MARCHE_FORME_PRIX_0 = '0';
    const FORME_MARCHE_FORME_PRIX_1 = '1';

    /** The enumerated values for the controle_unicite_num_marche field */
    const CONTROLE_UNICITE_NUM_MARCHE_0 = '0';
    const CONTROLE_UNICITE_NUM_MARCHE_1 = '1';

    /** The enumerated values for the affichage_num_marche field */
    const AFFICHAGE_NUM_MARCHE_0 = '0';
    const AFFICHAGE_NUM_MARCHE_1 = '1';

    /** The enumerated values for the affichage_date_fin_marche field */
    const AFFICHAGE_DATE_FIN_MARCHE_0 = '0';
    const AFFICHAGE_DATE_FIN_MARCHE_1 = '1';

    /** The enumerated values for the affichage_ice field */
    const AFFICHAGE_ICE_0 = '0';
    const AFFICHAGE_ICE_1 = '1';

    /** The enumerated values for the blocage_depot_hors_delai field */
    const BLOCAGE_DEPOT_HORS_DELAI_0 = '0';
    const BLOCAGE_DEPOT_HORS_DELAI_1 = '1';

    /** The enumerated values for the activer_suivi_pv field */
    const ACTIVER_SUIVI_PV_0 = '0';
    const ACTIVER_SUIVI_PV_1 = '1';

    /** The enumerated values for the captcha_validateur field */
    const CAPTCHA_VALIDATEUR_0 = '0';
    const CAPTCHA_VALIDATEUR_1 = '1';

    /** The enumerated values for the decision_depuis_resultat_analyse field */
    const DECISION_DEPUIS_RESULTAT_ANALYSE_0 = '0';
    const DECISION_DEPUIS_RESULTAT_ANALYSE_1 = '1';

    /** The enumerated values for the module_facture field */
    const MODULE_FACTURE_0 = '0';
    const MODULE_FACTURE_1 = '1';

    /** The enumerated values for the validation_entreprise_facturation field */
    const VALIDATION_ENTREPRISE_FACTURATION_0 = '0';
    const VALIDATION_ENTREPRISE_FACTURATION_1 = '1';

    /** The enumerated values for the bloquer_depot_si_env_non_depose field */
    const BLOQUER_DEPOT_SI_ENV_NON_DEPOSE_0 = '0';
    const BLOQUER_DEPOT_SI_ENV_NON_DEPOSE_1 = '1';

    /** The enumerated values for the bloquer_depot_signature_invalide field */
    const BLOQUER_DEPOT_SIGNATURE_INVALIDE_0 = '0';
    const BLOQUER_DEPOT_SIGNATURE_INVALIDE_1 = '1';

    /** The enumerated values for the consultation_import_lots field */
    const CONSULTATION_IMPORT_LOTS_0 = '0';
    const CONSULTATION_IMPORT_LOTS_1 = '1';

    /** The enumerated values for the depot_selection_lots field */
    const DEPOT_SELECTION_LOTS_0 = '0';
    const DEPOT_SELECTION_LOTS_1 = '1';

    /** The enumerated values for the modification_lots_apres_mise_en_ligne field */
    const MODIFICATION_LOTS_APRES_MISE_EN_LIGNE_0 = '0';
    const MODIFICATION_LOTS_APRES_MISE_EN_LIGNE_1 = '1';

    /** The enumerated values for the filtre_bdf_entreprise_valide field */
    const FILTRE_BDF_ENTREPRISE_VALIDE_0 = '0';
    const FILTRE_BDF_ENTREPRISE_VALIDE_1 = '1';

    /** The enumerated values for the affichage_identifiant_fiscale field */
    const AFFICHAGE_IDENTIFIANT_FISCALE_0 = '0';
    const AFFICHAGE_IDENTIFIANT_FISCALE_1 = '1';

    /** The enumerated values for the decision_creer_contrat field */
    const DECISION_CREER_CONTRAT_0 = '0';
    const DECISION_CREER_CONTRAT_1 = '1';

    /** The enumerated values for the generation_bi_cle field */
    const GENERATION_BI_CLE_0 = '0';
    const GENERATION_BI_CLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonConfigurationPlateforme objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonConfigurationPlateforme[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonConfigurationPlateformePeer::$fieldNames[CommonConfigurationPlateformePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdAuto', 'CodeCpv', 'MultiLinguismeEntreprise', 'GestionFournisseursDocsMesSousServices', 'AuthenticateInscritByCert', 'AuthenticateInscritByLogin', 'BaseQualifieeEntrepriseInsee', 'GestionBoampMesSousServices', 'GestionBiCleMesSousServices', 'NomEntrepriseToujoursVisible', 'GestionJalMesSousServices', 'ChoixLangueAffichageConsultation', 'CompteEntrepriseDonneesComplementaires', 'AnnuaireEntitesAchatVisibleParEntreprise', 'AffichageRechercheAvanceeAgentAcSadTransversaux', 'EncheresEntreprise', 'SocleInterne', 'ModuleCertificat', 'SocleExterneAgent', 'AfficherImageOrganisme', 'SocleExterneEntreprise', 'PortailDefenseEntreprise', 'CompteEntrepriseProvince', 'CompteEntrepriseTelephone3', 'CompteEntrepriseTaxProf', 'CompteEntrepriseRcville', 'CompteEntrepriseDeclarationHonneur', 'CompteEntrepriseQualification', 'CompteEntrepriseMoyensTechniques', 'CompteEntreprisePrestationsRealisees', 'CompteEntrepriseChiffreAffaireProductionBiensServices', 'EnveloppeOffreTechnique', 'CompteInscritChoixProfil', 'ProcedureAdaptee', 'CompteEntrepriseSiren', 'CompteEntrepriseActivationInscriptionParAgent', 'MenuEntrepriseConsultationsEnCours', 'CompteEntrepriseCapitalSocial', 'MailActivationCompteInscritEntreprise', 'DecisionDateNotification', 'DecisionPmiPme', 'DecisionNaturePrestations', 'DecisionObjetMarche', 'DecisionNote', 'DecisionFicheRecensement', 'RegistrePapierMailObligatoire', 'MenuEntrepriseIndicateursCles', 'AjoutRpaChampEmail', 'AjoutRpaChampTelephone', 'AjoutRpaChampFax', 'EntreprisePoserQuestionSansPj', 'UrlDemarcheAgent', 'UrlDemarcheEntreprise', 'SiretDetailEntiteAchat', 'PresenceElu', 'GererMonService', 'DepouillementEnveloppeDependRatEnveloppePrecedente', 'ConsultationAdresseRetraisDossiers', 'ConsultationAdresseDepotOffres', 'ConsultationCautionProvisoire', 'ConsultationLieuOuverturePlis', 'ConsultationQualification', 'ConsultationAgrement', 'ConsultationEchantillonsDemandes', 'ConsultationReunion', 'ConsultationVisiteDesLieux', 'ConsultationPrixAcquisition', 'ResultatAnalyseAvantDecision', 'CreationInscritParAtes', 'ConsultationVariantesAutorisees', 'RechercheAvanceeParTypeOrg', 'MenuAgentSocietesExclues', 'RechercheAvanceeParDomainesActivite', 'RechercheAvanceeParQualification', 'RechercheAvanceeParAgrement', 'ContactAdministratifDansDetailConsultationCoteEntreprise', 'ConsultationPiecesDossiers', 'GererAdressesService', 'TraduireAnnonces', 'AfficherBlocActionsDansDetailsAnnonces', 'AutoriserUneSeuleReponsePrincipaleParEntreprise', 'GenerationAvis', 'PassationAppliquerDonneesEnsembleLots', 'AutreAnnonceExtraitPv', 'AutreAnnonceRapportAchevement', 'AjoutFichierJointAutreAnnonce', 'ConsultationModePassation', 'CompteEntrepriseIdentifiantUnique', 'GererCertificatsAgent', 'AutreAnnonceProgrammePrevisionnel', 'AnnulerConsultation', 'CfeEntrepriseAccessibleParAgent', 'CompteEntrepriseCodeNaceReferentiel', 'CodeNutLtReferentiel', 'LieuxExecution', 'CompteEntrepriseDomaineActiviteLtReferentiel', 'ConsultationDomainesActivitesLtReferentiel', 'CompteEntrepriseAgrementLtReferentiel', 'CompteEntrepriseQualificationLtReferentiel', 'ReponsePasAPas', 'AgentControleFormatMotDePasse', 'EntrepriseValidationEmailInscription', 'TelechargerDceAvecAuthentification', 'AuthentificationBasic', 'ReglementConsultation', 'AnnoncesMarches', 'CfeDateFinValiditeObligatoire', 'AssocierDocumentsCfeConsultation', 'CompteEntrepriseRegion', 'CompteEntrepriseTelephone2', 'CompteEntrepriseCnss', 'CompteEntrepriseRcnum', 'CompteEntrepriseDomaineActivite', 'CompteInscritCodeNic', 'CompteEntrepriseCodeApe', 'CompteEntrepriseDocumentsCommerciaux', 'CompteEntrepriseAgrement', 'CompteEntrepriseMoyensHumains', 'CompteEntrepriseActiviteDomaineDefense', 'CompteEntrepriseDonneesFinancieres', 'EnveloppeAnonymat', 'PubliciteFormatXml', 'Article133GenerationPf', 'EntrepriseRepondreConsultationApresCloture', 'TelechargementOutilVerifHorodatage', 'AffichageCodeCpv', 'ConsultationDomainesActivites', 'StatistiquesMesureDemat', 'PublicationProcure', 'MenuEntrepriseToutesLesConsultations', 'CompteEntrepriseCpObligatoire', 'AnnulerDepot', 'TraduireEntiteAchatArabe', 'TraduireOrganismeArabe', 'DecisionCp', 'DecisionTrancheBudgetaire', 'DecisionClassement', 'DecisionAfficherDetailCandidatParDefaut', 'Article133UploadFichier', 'MultiLinguismeAgent', 'CompteEntrepriseIfu', 'GestionOrganismeParAgent', 'UtiliserLucene', 'UtiliserPageHtmlLieuxExecution', 'PradoValidateurFormatDate', 'PradoValidateurFormatEmail', 'SocleExternePpp', 'ValidationFormatChampsStricte', 'PoserQuestionNecessiteAuthentification', 'AutoriserModifProfilInscritAtes', 'UniciteReferenceConsultation', 'RegistrePapierRcnumRcvilleObligatoires', 'RegistrePapierAdresseCpVilleObligatoires', 'TelechargerDceSansIdentification', 'GestionEntrepriseParAgent', 'AutoriserCaracteresSpeciauxDansReference', 'InscriptionLibreEntreprise', 'AfficherCodeService', 'AuthenticateAgentByLogin', 'AuthenticateAgentByCert', 'GenererActeDengagement', 'EntrepriseControleFormatMotDePasse', 'AutreAnnonceInformation', 'CreerAutreAnnonce', 'ConsultationClause', 'PanierEntreprise', 'ParametragePubliciteParTypeProcedure', 'ExportDecision', 'LieuOuverturePlisObligatoire', 'RegleMiseEnLigneParEntiteCoordinatrice', 'GestionNewsletter', 'PubliciteOpoce', 'GestionModelesFormulaire', 'GestionAdressesFacturationJal', 'PubliciteMarchesEnLigne', 'DossierAdditif', 'TypeMarche', 'TypePrestation', 'AfficherTjrBlocCaracteristiqueReponse', 'AlerteMetier', 'BourseALaSousTraitance', 'PublierGuides', 'RechercheAutoCompletion', 'StatutCompteEntreprise', 'GestionOrganismes', 'AccueilEntreprisePersonnalise', 'InterfaceModuleSub', 'AuthentificationAgentMultiOrganismes', 'PartagerConsultation', 'AnnuaireAcheteursPublics', 'EntrepriseActionsGroupees', 'LieuxExecutionCarte', 'SurchargeReferentiels', 'ModeRestrictionRgs', 'AutreAnnonceDecisionResiliation', 'AutreAnnonceSyntheseRapportAudit', 'FicheWeka', 'GenerationAutomatiqueMdpAgent', 'GenerationAutomatiqueMdpInscrit', 'ListeAcRgs', 'ListeConsOrg', 'MarchePublicSimplifieEntreprise', 'DemandeValidationControleur', 'AccesExecContrats', 'FormeJuridiqueGroupementAttributaire', 'DateLimiteRemisePlisObligatoire', 'ModifTypeProcedure', 'DonneesComplementairesProcedure', 'FormeMarcheFormePrix', 'ControleUniciteNumMarche', 'AffichageNumMarche', 'AffichageDateFinMarche', 'AffichageIce', 'BlocageDepotHorsDelai', 'ActiverSuiviPv', 'CaptchaValidateur', 'DecisionDepuisResultatAnalyse', 'ModuleFacture', 'ValidationEntrepriseFacturation', 'BloquerDepotSiEnvNonDepose', 'BloquerDepotSignatureInvalide', 'ConsultationImportLots', 'DepotSelectionLots', 'ModificationLotsApresMiseEnLigne', 'FiltreBdfEntrepriseValide', 'AffichageIdentifiantFiscale', 'DecisionCreerContrat', 'GenerationBiCle', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAuto', 'codeCpv', 'multiLinguismeEntreprise', 'gestionFournisseursDocsMesSousServices', 'authenticateInscritByCert', 'authenticateInscritByLogin', 'baseQualifieeEntrepriseInsee', 'gestionBoampMesSousServices', 'gestionBiCleMesSousServices', 'nomEntrepriseToujoursVisible', 'gestionJalMesSousServices', 'choixLangueAffichageConsultation', 'compteEntrepriseDonneesComplementaires', 'annuaireEntitesAchatVisibleParEntreprise', 'affichageRechercheAvanceeAgentAcSadTransversaux', 'encheresEntreprise', 'socleInterne', 'moduleCertificat', 'socleExterneAgent', 'afficherImageOrganisme', 'socleExterneEntreprise', 'portailDefenseEntreprise', 'compteEntrepriseProvince', 'compteEntrepriseTelephone3', 'compteEntrepriseTaxProf', 'compteEntrepriseRcville', 'compteEntrepriseDeclarationHonneur', 'compteEntrepriseQualification', 'compteEntrepriseMoyensTechniques', 'compteEntreprisePrestationsRealisees', 'compteEntrepriseChiffreAffaireProductionBiensServices', 'enveloppeOffreTechnique', 'compteInscritChoixProfil', 'procedureAdaptee', 'compteEntrepriseSiren', 'compteEntrepriseActivationInscriptionParAgent', 'menuEntrepriseConsultationsEnCours', 'compteEntrepriseCapitalSocial', 'mailActivationCompteInscritEntreprise', 'decisionDateNotification', 'decisionPmiPme', 'decisionNaturePrestations', 'decisionObjetMarche', 'decisionNote', 'decisionFicheRecensement', 'registrePapierMailObligatoire', 'menuEntrepriseIndicateursCles', 'ajoutRpaChampEmail', 'ajoutRpaChampTelephone', 'ajoutRpaChampFax', 'entreprisePoserQuestionSansPj', 'urlDemarcheAgent', 'urlDemarcheEntreprise', 'siretDetailEntiteAchat', 'presenceElu', 'gererMonService', 'depouillementEnveloppeDependRatEnveloppePrecedente', 'consultationAdresseRetraisDossiers', 'consultationAdresseDepotOffres', 'consultationCautionProvisoire', 'consultationLieuOuverturePlis', 'consultationQualification', 'consultationAgrement', 'consultationEchantillonsDemandes', 'consultationReunion', 'consultationVisiteDesLieux', 'consultationPrixAcquisition', 'resultatAnalyseAvantDecision', 'creationInscritParAtes', 'consultationVariantesAutorisees', 'rechercheAvanceeParTypeOrg', 'menuAgentSocietesExclues', 'rechercheAvanceeParDomainesActivite', 'rechercheAvanceeParQualification', 'rechercheAvanceeParAgrement', 'contactAdministratifDansDetailConsultationCoteEntreprise', 'consultationPiecesDossiers', 'gererAdressesService', 'traduireAnnonces', 'afficherBlocActionsDansDetailsAnnonces', 'autoriserUneSeuleReponsePrincipaleParEntreprise', 'generationAvis', 'passationAppliquerDonneesEnsembleLots', 'autreAnnonceExtraitPv', 'autreAnnonceRapportAchevement', 'ajoutFichierJointAutreAnnonce', 'consultationModePassation', 'compteEntrepriseIdentifiantUnique', 'gererCertificatsAgent', 'autreAnnonceProgrammePrevisionnel', 'annulerConsultation', 'cfeEntrepriseAccessibleParAgent', 'compteEntrepriseCodeNaceReferentiel', 'codeNutLtReferentiel', 'lieuxExecution', 'compteEntrepriseDomaineActiviteLtReferentiel', 'consultationDomainesActivitesLtReferentiel', 'compteEntrepriseAgrementLtReferentiel', 'compteEntrepriseQualificationLtReferentiel', 'reponsePasAPas', 'agentControleFormatMotDePasse', 'entrepriseValidationEmailInscription', 'telechargerDceAvecAuthentification', 'authentificationBasic', 'reglementConsultation', 'annoncesMarches', 'cfeDateFinValiditeObligatoire', 'associerDocumentsCfeConsultation', 'compteEntrepriseRegion', 'compteEntrepriseTelephone2', 'compteEntrepriseCnss', 'compteEntrepriseRcnum', 'compteEntrepriseDomaineActivite', 'compteInscritCodeNic', 'compteEntrepriseCodeApe', 'compteEntrepriseDocumentsCommerciaux', 'compteEntrepriseAgrement', 'compteEntrepriseMoyensHumains', 'compteEntrepriseActiviteDomaineDefense', 'compteEntrepriseDonneesFinancieres', 'enveloppeAnonymat', 'publiciteFormatXml', 'article133GenerationPf', 'entrepriseRepondreConsultationApresCloture', 'telechargementOutilVerifHorodatage', 'affichageCodeCpv', 'consultationDomainesActivites', 'statistiquesMesureDemat', 'publicationProcure', 'menuEntrepriseToutesLesConsultations', 'compteEntrepriseCpObligatoire', 'annulerDepot', 'traduireEntiteAchatArabe', 'traduireOrganismeArabe', 'decisionCp', 'decisionTrancheBudgetaire', 'decisionClassement', 'decisionAfficherDetailCandidatParDefaut', 'article133UploadFichier', 'multiLinguismeAgent', 'compteEntrepriseIfu', 'gestionOrganismeParAgent', 'utiliserLucene', 'utiliserPageHtmlLieuxExecution', 'pradoValidateurFormatDate', 'pradoValidateurFormatEmail', 'socleExternePpp', 'validationFormatChampsStricte', 'poserQuestionNecessiteAuthentification', 'autoriserModifProfilInscritAtes', 'uniciteReferenceConsultation', 'registrePapierRcnumRcvilleObligatoires', 'registrePapierAdresseCpVilleObligatoires', 'telechargerDceSansIdentification', 'gestionEntrepriseParAgent', 'autoriserCaracteresSpeciauxDansReference', 'inscriptionLibreEntreprise', 'afficherCodeService', 'authenticateAgentByLogin', 'authenticateAgentByCert', 'genererActeDengagement', 'entrepriseControleFormatMotDePasse', 'autreAnnonceInformation', 'creerAutreAnnonce', 'consultationClause', 'panierEntreprise', 'parametragePubliciteParTypeProcedure', 'exportDecision', 'lieuOuverturePlisObligatoire', 'regleMiseEnLigneParEntiteCoordinatrice', 'gestionNewsletter', 'publiciteOpoce', 'gestionModelesFormulaire', 'gestionAdressesFacturationJal', 'publiciteMarchesEnLigne', 'dossierAdditif', 'typeMarche', 'typePrestation', 'afficherTjrBlocCaracteristiqueReponse', 'alerteMetier', 'bourseALaSousTraitance', 'publierGuides', 'rechercheAutoCompletion', 'statutCompteEntreprise', 'gestionOrganismes', 'accueilEntreprisePersonnalise', 'interfaceModuleSub', 'authentificationAgentMultiOrganismes', 'partagerConsultation', 'annuaireAcheteursPublics', 'entrepriseActionsGroupees', 'lieuxExecutionCarte', 'surchargeReferentiels', 'modeRestrictionRgs', 'autreAnnonceDecisionResiliation', 'autreAnnonceSyntheseRapportAudit', 'ficheWeka', 'generationAutomatiqueMdpAgent', 'generationAutomatiqueMdpInscrit', 'listeAcRgs', 'listeConsOrg', 'marchePublicSimplifieEntreprise', 'demandeValidationControleur', 'accesExecContrats', 'formeJuridiqueGroupementAttributaire', 'dateLimiteRemisePlisObligatoire', 'modifTypeProcedure', 'donneesComplementairesProcedure', 'formeMarcheFormePrix', 'controleUniciteNumMarche', 'affichageNumMarche', 'affichageDateFinMarche', 'affichageIce', 'blocageDepotHorsDelai', 'activerSuiviPv', 'captchaValidateur', 'decisionDepuisResultatAnalyse', 'moduleFacture', 'validationEntrepriseFacturation', 'bloquerDepotSiEnvNonDepose', 'bloquerDepotSignatureInvalide', 'consultationImportLots', 'depotSelectionLots', 'modificationLotsApresMiseEnLigne', 'filtreBdfEntrepriseValide', 'affichageIdentifiantFiscale', 'decisionCreerContrat', 'generationBiCle', ),
        BasePeer::TYPE_COLNAME => array (CommonConfigurationPlateformePeer::ID_AUTO, CommonConfigurationPlateformePeer::CODE_CPV, CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE, CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES, CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT, CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN, CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE, CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES, CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES, CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE, CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES, CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES, CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE, CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX, CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE, CommonConfigurationPlateformePeer::SOCLE_INTERNE, CommonConfigurationPlateformePeer::MODULE_CERTIFICAT, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT, CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE, CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES, CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE, CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL, CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL, CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE, CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION, CommonConfigurationPlateformePeer::DECISION_PMI_PME, CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS, CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE, CommonConfigurationPlateformePeer::DECISION_NOTE, CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX, CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ, CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT, CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE, CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT, CommonConfigurationPlateformePeer::PRESENCE_ELU, CommonConfigurationPlateformePeer::GERER_MON_SERVICE, CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE, CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS, CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES, CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE, CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS, CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION, CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT, CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES, CommonConfigurationPlateformePeer::CONSULTATION_REUNION, CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX, CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION, CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION, CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES, CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG, CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT, CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE, CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS, CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE, CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES, CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES, CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE, CommonConfigurationPlateformePeer::GENERATION_AVIS, CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT, CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE, CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE, CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL, CommonConfigurationPlateformePeer::ANNULER_CONSULTATION, CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL, CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL, CommonConfigurationPlateformePeer::LIEUX_EXECUTION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL, CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL, CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS, CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE, CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION, CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION, CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC, CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION, CommonConfigurationPlateformePeer::ANNONCES_MARCHES, CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE, CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE, CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES, CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT, CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML, CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF, CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE, CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE, CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV, CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES, CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT, CommonConfigurationPlateformePeer::PUBLICATION_PROCURE, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE, CommonConfigurationPlateformePeer::ANNULER_DEPOT, CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE, CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE, CommonConfigurationPlateformePeer::DECISION_CP, CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE, CommonConfigurationPlateformePeer::DECISION_CLASSEMENT, CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT, CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER, CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU, CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT, CommonConfigurationPlateformePeer::UTILISER_LUCENE, CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION, CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE, CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP, CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE, CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION, CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES, CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES, CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION, CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT, CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE, CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE, CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE, CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN, CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT, CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT, CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION, CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE, CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE, CommonConfigurationPlateformePeer::PANIER_ENTREPRISE, CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE, CommonConfigurationPlateformePeer::EXPORT_DECISION, CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE, CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE, CommonConfigurationPlateformePeer::GESTION_NEWSLETTER, CommonConfigurationPlateformePeer::PUBLICITE_OPOCE, CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE, CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL, CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE, CommonConfigurationPlateformePeer::DOSSIER_ADDITIF, CommonConfigurationPlateformePeer::TYPE_MARCHE, CommonConfigurationPlateformePeer::TYPE_PRESTATION, CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE, CommonConfigurationPlateformePeer::ALERTE_METIER, CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE, CommonConfigurationPlateformePeer::PUBLIER_GUIDES, CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION, CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE, CommonConfigurationPlateformePeer::GESTION_ORGANISMES, CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE, CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB, CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES, CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION, CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS, CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES, CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE, CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS, CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT, CommonConfigurationPlateformePeer::FICHE_WEKA, CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT, CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT, CommonConfigurationPlateformePeer::LISTE_AC_RGS, CommonConfigurationPlateformePeer::LISTE_CONS_ORG, CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE, CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR, CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS, CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE, CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE, CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE, CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE, CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX, CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE, CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE, CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE, CommonConfigurationPlateformePeer::AFFICHAGE_ICE, CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI, CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV, CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR, CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE, CommonConfigurationPlateformePeer::MODULE_FACTURE, CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION, CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE, CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE, CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS, CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS, CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE, CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE, CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE, CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT, CommonConfigurationPlateformePeer::GENERATION_BI_CLE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AUTO', 'CODE_CPV', 'MULTI_LINGUISME_ENTREPRISE', 'GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES', 'AUTHENTICATE_INSCRIT_BY_CERT', 'AUTHENTICATE_INSCRIT_BY_LOGIN', 'BASE_QUALIFIEE_ENTREPRISE_INSEE', 'GESTION_BOAMP_MES_SOUS_SERVICES', 'GESTION_BI_CLE_MES_SOUS_SERVICES', 'NOM_ENTREPRISE_TOUJOURS_VISIBLE', 'GESTION_JAL_MES_SOUS_SERVICES', 'CHOIX_LANGUE_AFFICHAGE_CONSULTATION', 'COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES', 'ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE', 'AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX', 'ENCHERES_ENTREPRISE', 'SOCLE_INTERNE', 'MODULE_CERTIFICAT', 'SOCLE_EXTERNE_AGENT', 'AFFICHER_IMAGE_ORGANISME', 'SOCLE_EXTERNE_ENTREPRISE', 'PORTAIL_DEFENSE_ENTREPRISE', 'COMPTE_ENTREPRISE_PROVINCE', 'COMPTE_ENTREPRISE_TELEPHONE3', 'COMPTE_ENTREPRISE_TAX_PROF', 'COMPTE_ENTREPRISE_RCVILLE', 'COMPTE_ENTREPRISE_DECLARATION_HONNEUR', 'COMPTE_ENTREPRISE_QUALIFICATION', 'COMPTE_ENTREPRISE_MOYENS_TECHNIQUES', 'COMPTE_ENTREPRISE_PRESTATIONS_REALISEES', 'COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES', 'ENVELOPPE_OFFRE_TECHNIQUE', 'COMPTE_INSCRIT_CHOIX_PROFIL', 'PROCEDURE_ADAPTEE', 'COMPTE_ENTREPRISE_SIREN', 'COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT', 'MENU_ENTREPRISE_CONSULTATIONS_EN_COURS', 'COMPTE_ENTREPRISE_CAPITAL_SOCIAL', 'MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE', 'DECISION_DATE_NOTIFICATION', 'DECISION_PMI_PME', 'DECISION_NATURE_PRESTATIONS', 'DECISION_OBJET_MARCHE', 'DECISION_NOTE', 'DECISION_FICHE_RECENSEMENT', 'REGISTRE_PAPIER_MAIL_OBLIGATOIRE', 'MENU_ENTREPRISE_INDICATEURS_CLES', 'AJOUT_RPA_CHAMP_EMAIL', 'AJOUT_RPA_CHAMP_TELEPHONE', 'AJOUT_RPA_CHAMP_FAX', 'ENTREPRISE_POSER_QUESTION_SANS_PJ', 'URL_DEMARCHE_AGENT', 'URL_DEMARCHE_ENTREPRISE', 'SIRET_DETAIL_ENTITE_ACHAT', 'PRESENCE_ELU', 'GERER_MON_SERVICE', 'DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE', 'CONSULTATION_ADRESSE_RETRAIS_DOSSIERS', 'CONSULTATION_ADRESSE_DEPOT_OFFRES', 'CONSULTATION_CAUTION_PROVISOIRE', 'CONSULTATION_LIEU_OUVERTURE_PLIS', 'CONSULTATION_QUALIFICATION', 'CONSULTATION_AGREMENT', 'CONSULTATION_ECHANTILLONS_DEMANDES', 'CONSULTATION_REUNION', 'CONSULTATION_VISITE_DES_LIEUX', 'CONSULTATION_PRIX_ACQUISITION', 'RESULTAT_ANALYSE_AVANT_DECISION', 'CREATION_INSCRIT_PAR_ATES', 'CONSULTATION_VARIANTES_AUTORISEES', 'RECHERCHE_AVANCEE_PAR_TYPE_ORG', 'MENU_AGENT_SOCIETES_EXCLUES', 'RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE', 'RECHERCHE_AVANCEE_PAR_QUALIFICATION', 'RECHERCHE_AVANCEE_PAR_AGREMENT', 'CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE', 'CONSULTATION_PIECES_DOSSIERS', 'GERER_ADRESSES_SERVICE', 'TRADUIRE_ANNONCES', 'AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES', 'AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE', 'GENERATION_AVIS', 'PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS', 'AUTRE_ANNONCE_EXTRAIT_PV', 'AUTRE_ANNONCE_RAPPORT_ACHEVEMENT', 'AJOUT_FICHIER_JOINT_AUTRE_ANNONCE', 'CONSULTATION_MODE_PASSATION', 'COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE', 'GERER_CERTIFICATS_AGENT', 'AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL', 'ANNULER_CONSULTATION', 'CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT', 'COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL', 'CODE_NUT_LT_REFERENTIEL', 'LIEUX_EXECUTION', 'COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL', 'CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL', 'COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL', 'COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL', 'REPONSE_PAS_A_PAS', 'AGENT_CONTROLE_FORMAT_MOT_DE_PASSE', 'ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION', 'TELECHARGER_DCE_AVEC_AUTHENTIFICATION', 'AUTHENTIFICATION_BASIC', 'REGLEMENT_CONSULTATION', 'ANNONCES_MARCHES', 'CFE_DATE_FIN_VALIDITE_OBLIGATOIRE', 'ASSOCIER_DOCUMENTS_CFE_CONSULTATION', 'COMPTE_ENTREPRISE_REGION', 'COMPTE_ENTREPRISE_TELEPHONE2', 'COMPTE_ENTREPRISE_CNSS', 'COMPTE_ENTREPRISE_RCNUM', 'COMPTE_ENTREPRISE_DOMAINE_ACTIVITE', 'COMPTE_INSCRIT_CODE_NIC', 'COMPTE_ENTREPRISE_CODE_APE', 'COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX', 'COMPTE_ENTREPRISE_AGREMENT', 'COMPTE_ENTREPRISE_MOYENS_HUMAINS', 'COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE', 'COMPTE_ENTREPRISE_DONNEES_FINANCIERES', 'ENVELOPPE_ANONYMAT', 'PUBLICITE_FORMAT_XML', 'ARTICLE_133_GENERATION_PF', 'ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE', 'TELECHARGEMENT_OUTIL_VERIF_HORODATAGE', 'AFFICHAGE_CODE_CPV', 'CONSULTATION_DOMAINES_ACTIVITES', 'STATISTIQUES_MESURE_DEMAT', 'PUBLICATION_PROCURE', 'MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS', 'COMPTE_ENTREPRISE_CP_OBLIGATOIRE', 'ANNULER_DEPOT', 'TRADUIRE_ENTITE_ACHAT_ARABE', 'TRADUIRE_ORGANISME_ARABE', 'DECISION_CP', 'DECISION_TRANCHE_BUDGETAIRE', 'DECISION_CLASSEMENT', 'DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT', 'ARTICLE_133_UPLOAD_FICHIER', 'MULTI_LINGUISME_AGENT', 'COMPTE_ENTREPRISE_IFU', 'GESTION_ORGANISME_PAR_AGENT', 'UTILISER_LUCENE', 'UTILISER_PAGE_HTML_LIEUX_EXECUTION', 'PRADO_VALIDATEUR_FORMAT_DATE', 'PRADO_VALIDATEUR_FORMAT_EMAIL', 'SOCLE_EXTERNE_PPP', 'VALIDATION_FORMAT_CHAMPS_STRICTE', 'POSER_QUESTION_NECESSITE_AUTHENTIFICATION', 'AUTORISER_MODIF_PROFIL_INSCRIT_ATES', 'UNICITE_REFERENCE_CONSULTATION', 'REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES', 'REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES', 'TELECHARGER_DCE_SANS_IDENTIFICATION', 'GESTION_ENTREPRISE_PAR_AGENT', 'AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE', 'INSCRIPTION_LIBRE_ENTREPRISE', 'AFFICHER_CODE_SERVICE', 'AUTHENTICATE_AGENT_BY_LOGIN', 'AUTHENTICATE_AGENT_BY_CERT', 'GENERER_ACTE_DENGAGEMENT', 'ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE', 'AUTRE_ANNONCE_INFORMATION', 'CREER_AUTRE_ANNONCE', 'CONSULTATION_CLAUSE', 'PANIER_ENTREPRISE', 'PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE', 'EXPORT_DECISION', 'LIEU_OUVERTURE_PLIS_OBLIGATOIRE', 'REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE', 'GESTION_NEWSLETTER', 'PUBLICITE_OPOCE', 'GESTION_MODELES_FORMULAIRE', 'GESTION_ADRESSES_FACTURATION_JAL', 'PUBLICITE_MARCHES_EN_LIGNE', 'DOSSIER_ADDITIF', 'TYPE_MARCHE', 'TYPE_PRESTATION', 'AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE', 'ALERTE_METIER', 'BOURSE_A_LA_SOUS_TRAITANCE', 'PUBLIER_GUIDES', 'RECHERCHE_AUTO_COMPLETION', 'STATUT_COMPTE_ENTREPRISE', 'GESTION_ORGANISMES', 'ACCUEIL_ENTREPRISE_PERSONNALISE', 'INTERFACE_MODULE_SUB', 'AUTHENTIFICATION_AGENT_MULTI_ORGANISMES', 'PARTAGER_CONSULTATION', 'ANNUAIRE_ACHETEURS_PUBLICS', 'ENTREPRISE_ACTIONS_GROUPEES', 'LIEUX_EXECUTION_CARTE', 'SURCHARGE_REFERENTIELS', 'MODE_RESTRICTION_RGS', 'AUTRE_ANNONCE_DECISION_RESILIATION', 'AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT', 'FICHE_WEKA', 'GENERATION_AUTOMATIQUE_MDP_AGENT', 'GENERATION_AUTOMATIQUE_MDP_INSCRIT', 'LISTE_AC_RGS', 'LISTE_CONS_ORG', 'MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE', 'DEMANDE_VALIDATION_CONTROLEUR', 'ACCES_EXEC_CONTRATS', 'FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE', 'DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE', 'MODIF_TYPE_PROCEDURE', 'DONNEES_COMPLEMENTAIRES_PROCEDURE', 'FORME_MARCHE_FORME_PRIX', 'CONTROLE_UNICITE_NUM_MARCHE', 'AFFICHAGE_NUM_MARCHE', 'AFFICHAGE_DATE_FIN_MARCHE', 'AFFICHAGE_ICE', 'BLOCAGE_DEPOT_HORS_DELAI', 'ACTIVER_SUIVI_PV', 'CAPTCHA_VALIDATEUR', 'DECISION_DEPUIS_RESULTAT_ANALYSE', 'MODULE_FACTURE', 'VALIDATION_ENTREPRISE_FACTURATION', 'BLOQUER_DEPOT_SI_ENV_NON_DEPOSE', 'BLOQUER_DEPOT_SIGNATURE_INVALIDE', 'CONSULTATION_IMPORT_LOTS', 'DEPOT_SELECTION_LOTS', 'MODIFICATION_LOTS_APRES_MISE_EN_LIGNE', 'FILTRE_BDF_ENTREPRISE_VALIDE', 'AFFICHAGE_IDENTIFIANT_FISCALE', 'DECISION_CREER_CONTRAT', 'GENERATION_BI_CLE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_auto', 'code_cpv', 'multi_linguisme_entreprise', 'gestion_fournisseurs_docs_mes_sous_services', 'authenticate_inscrit_by_cert', 'authenticate_inscrit_by_login', 'base_qualifiee_entreprise_insee', 'gestion_boamp_mes_sous_services', 'gestion_bi_cle_mes_sous_services', 'nom_entreprise_toujours_visible', 'gestion_jal_mes_sous_services', 'choix_langue_affichage_consultation', 'compte_entreprise_donnees_complementaires', 'annuaire_entites_achat_visible_par_entreprise', 'affichage_recherche_avancee_agent_ac_sad_transversaux', 'encheres_entreprise', 'socle_interne', 'module_certificat', 'socle_externe_agent', 'afficher_image_organisme', 'socle_externe_entreprise', 'portail_defense_entreprise', 'compte_entreprise_province', 'compte_entreprise_telephone3', 'compte_entreprise_tax_prof', 'compte_entreprise_rcville', 'compte_entreprise_declaration_honneur', 'compte_entreprise_qualification', 'compte_entreprise_moyens_techniques', 'compte_entreprise_prestations_realisees', 'compte_entreprise_chiffre_affaire_production_biens_services', 'enveloppe_offre_technique', 'compte_inscrit_choix_profil', 'procedure_adaptee', 'compte_entreprise_siren', 'compte_entreprise_activation_inscription_par_agent', 'menu_entreprise_consultations_en_cours', 'compte_entreprise_capital_social', 'mail_activation_compte_inscrit_entreprise', 'decision_date_notification', 'decision_pmi_pme', 'decision_nature_prestations', 'decision_objet_marche', 'decision_note', 'decision_fiche_recensement', 'registre_papier_mail_obligatoire', 'menu_entreprise_indicateurs_cles', 'ajout_rpa_champ_email', 'ajout_rpa_champ_telephone', 'ajout_rpa_champ_fax', 'entreprise_poser_question_sans_pj', 'url_demarche_agent', 'url_demarche_entreprise', 'siret_detail_entite_achat', 'presence_elu', 'gerer_mon_service', 'depouillement_enveloppe_depend_RAT_enveloppe_precedente', 'consultation_adresse_retrais_dossiers', 'consultation_adresse_depot_offres', 'consultation_caution_provisoire', 'consultation_lieu_ouverture_plis', 'consultation_qualification', 'consultation_agrement', 'consultation_echantillons_demandes', 'consultation_reunion', 'consultation_visite_des_lieux', 'consultation_prix_acquisition', 'resultat_analyse_avant_decision', 'creation_inscrit_par_ates', 'consultation_variantes_autorisees', 'recherche_avancee_par_type_org', 'menu_agent_societes_exclues', 'recherche_avancee_par_domaines_activite', 'recherche_avancee_par_qualification', 'recherche_avancee_par_agrement', 'contact_administratif_dans_detail_consultation_cote_entreprise', 'consultation_pieces_dossiers', 'gerer_adresses_service', 'traduire_annonces', 'afficher_bloc_actions_dans_details_annonces', 'autoriser_une_seule_reponse_principale_par_entreprise', 'generation_avis', 'passation_appliquer_donnees_ensemble_lots', 'autre_annonce_extrait_pv', 'autre_annonce_rapport_achevement', 'ajout_fichier_joint_autre_annonce', 'consultation_mode_passation', 'compte_entreprise_identifiant_unique', 'gerer_certificats_agent', 'autre_annonce_programme_previsionnel', 'annuler_consultation', 'cfe_entreprise_accessible_par_agent', 'compte_entreprise_code_nace_referentiel', 'code_nut_lt_referentiel', 'lieux_execution', 'compte_entreprise_domaine_activite_lt_referentiel', 'consultation_domaines_activites_lt_referentiel', 'compte_entreprise_agrement_lt_referentiel', 'compte_entreprise_qualification_lt_referentiel', 'reponse_pas_a_pas', 'agent_controle_format_mot_de_passe', 'entreprise_validation_email_inscription', 'telecharger_dce_avec_authentification', 'authentification_basic', 'reglement_consultation', 'annonces_marches', 'cfe_date_fin_validite_obligatoire', 'associer_documents_cfe_consultation', 'compte_entreprise_region', 'compte_entreprise_telephone2', 'compte_entreprise_cnss', 'compte_entreprise_rcnum', 'compte_entreprise_domaine_activite', 'compte_inscrit_code_nic', 'compte_entreprise_code_ape', 'compte_entreprise_documents_commerciaux', 'compte_entreprise_agrement', 'compte_entreprise_moyens_humains', 'compte_entreprise_activite_domaine_defense', 'compte_entreprise_donnees_financieres', 'enveloppe_anonymat', 'publicite_format_xml', 'article_133_generation_pf', 'entreprise_repondre_consultation_apres_cloture', 'telechargement_outil_verif_horodatage', 'affichage_code_cpv', 'consultation_domaines_activites', 'statistiques_mesure_demat', 'publication_procure', 'menu_entreprise_toutes_les_consultations', 'compte_entreprise_cp_obligatoire', 'annuler_depot', 'traduire_entite_achat_arabe', 'traduire_organisme_arabe', 'decision_cp', 'decision_tranche_budgetaire', 'decision_classement', 'decision_afficher_detail_candidat_par_defaut', 'article_133_upload_fichier', 'multi_linguisme_agent', 'compte_entreprise_ifu', 'gestion_organisme_par_agent', 'utiliser_lucene', 'utiliser_page_html_lieux_execution', 'prado_validateur_format_date', 'prado_validateur_format_email', 'socle_externe_ppp', 'validation_format_champs_stricte', 'poser_question_necessite_authentification', 'autoriser_modif_profil_inscrit_ates', 'unicite_reference_consultation', 'registre_papier_rcnum_rcville_obligatoires', 'registre_papier_adresse_cp_ville_obligatoires', 'telecharger_dce_sans_identification', 'gestion_entreprise_par_agent', 'autoriser_caracteres_speciaux_dans_reference', 'inscription_libre_entreprise', 'afficher_code_service', 'authenticate_agent_by_login', 'authenticate_agent_by_cert', 'generer_acte_dengagement', 'entreprise_controle_format_mot_de_passe', 'autre_annonce_information', 'creer_autre_annonce', 'consultation_clause', 'panier_entreprise', 'parametrage_publicite_par_type_procedure', 'export_decision', 'lieu_ouverture_plis_obligatoire', 'regle_mise_en_ligne_par_entite_coordinatrice', 'gestion_newsletter', 'publicite_opoce', 'gestion_modeles_formulaire', 'gestion_adresses_facturation_JAL', 'publicite_marches_en_ligne', 'dossier_additif', 'type_marche', 'type_prestation', 'afficher_tjr_bloc_caracteristique_reponse', 'alerte_metier', 'bourse_a_la_sous_traitance', 'publier_guides', 'recherche_auto_completion', 'statut_compte_entreprise', 'gestion_organismes', 'accueil_entreprise_personnalise', 'interface_module_sub', 'authentification_agent_multi_organismes', 'partager_consultation', 'annuaire_acheteurs_publics', 'entreprise_actions_groupees', 'lieux_execution_carte', 'surcharge_referentiels', 'Mode_Restriction_RGS', 'autre_annonce_decision_resiliation', 'autre_annonce_synthese_rapport_audit', 'fiche_weka', 'generation_automatique_mdp_agent', 'generation_automatique_mdp_inscrit', 'liste_ac_rgs', 'liste_cons_org', 'marche_public_simplifie_entreprise', 'demande_validation_controleur', 'acces_exec_contrats', 'forme_juridique_groupement_attributaire', 'date_limite_remise_plis_obligatoire', 'modif_type_procedure', 'donnees_complementaires_procedure', 'forme_marche_forme_prix', 'controle_unicite_num_marche', 'affichage_num_marche', 'affichage_date_fin_marche', 'affichage_ice', 'blocage_depot_hors_delai', 'activer_suivi_pv', 'captcha_validateur', 'decision_depuis_resultat_analyse', 'module_facture', 'validation_entreprise_facturation', 'bloquer_depot_si_env_non_depose', 'bloquer_depot_signature_invalide', 'consultation_import_lots', 'depot_selection_lots', 'modification_lots_apres_mise_en_ligne', 'filtre_bdf_entreprise_valide', 'affichage_identifiant_fiscale', 'decision_creer_contrat', 'generation_bi_cle', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonConfigurationPlateformePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdAuto' => 0, 'CodeCpv' => 1, 'MultiLinguismeEntreprise' => 2, 'GestionFournisseursDocsMesSousServices' => 3, 'AuthenticateInscritByCert' => 4, 'AuthenticateInscritByLogin' => 5, 'BaseQualifieeEntrepriseInsee' => 6, 'GestionBoampMesSousServices' => 7, 'GestionBiCleMesSousServices' => 8, 'NomEntrepriseToujoursVisible' => 9, 'GestionJalMesSousServices' => 10, 'ChoixLangueAffichageConsultation' => 11, 'CompteEntrepriseDonneesComplementaires' => 12, 'AnnuaireEntitesAchatVisibleParEntreprise' => 13, 'AffichageRechercheAvanceeAgentAcSadTransversaux' => 14, 'EncheresEntreprise' => 15, 'SocleInterne' => 16, 'ModuleCertificat' => 17, 'SocleExterneAgent' => 18, 'AfficherImageOrganisme' => 19, 'SocleExterneEntreprise' => 20, 'PortailDefenseEntreprise' => 21, 'CompteEntrepriseProvince' => 22, 'CompteEntrepriseTelephone3' => 23, 'CompteEntrepriseTaxProf' => 24, 'CompteEntrepriseRcville' => 25, 'CompteEntrepriseDeclarationHonneur' => 26, 'CompteEntrepriseQualification' => 27, 'CompteEntrepriseMoyensTechniques' => 28, 'CompteEntreprisePrestationsRealisees' => 29, 'CompteEntrepriseChiffreAffaireProductionBiensServices' => 30, 'EnveloppeOffreTechnique' => 31, 'CompteInscritChoixProfil' => 32, 'ProcedureAdaptee' => 33, 'CompteEntrepriseSiren' => 34, 'CompteEntrepriseActivationInscriptionParAgent' => 35, 'MenuEntrepriseConsultationsEnCours' => 36, 'CompteEntrepriseCapitalSocial' => 37, 'MailActivationCompteInscritEntreprise' => 38, 'DecisionDateNotification' => 39, 'DecisionPmiPme' => 40, 'DecisionNaturePrestations' => 41, 'DecisionObjetMarche' => 42, 'DecisionNote' => 43, 'DecisionFicheRecensement' => 44, 'RegistrePapierMailObligatoire' => 45, 'MenuEntrepriseIndicateursCles' => 46, 'AjoutRpaChampEmail' => 47, 'AjoutRpaChampTelephone' => 48, 'AjoutRpaChampFax' => 49, 'EntreprisePoserQuestionSansPj' => 50, 'UrlDemarcheAgent' => 51, 'UrlDemarcheEntreprise' => 52, 'SiretDetailEntiteAchat' => 53, 'PresenceElu' => 54, 'GererMonService' => 55, 'DepouillementEnveloppeDependRatEnveloppePrecedente' => 56, 'ConsultationAdresseRetraisDossiers' => 57, 'ConsultationAdresseDepotOffres' => 58, 'ConsultationCautionProvisoire' => 59, 'ConsultationLieuOuverturePlis' => 60, 'ConsultationQualification' => 61, 'ConsultationAgrement' => 62, 'ConsultationEchantillonsDemandes' => 63, 'ConsultationReunion' => 64, 'ConsultationVisiteDesLieux' => 65, 'ConsultationPrixAcquisition' => 66, 'ResultatAnalyseAvantDecision' => 67, 'CreationInscritParAtes' => 68, 'ConsultationVariantesAutorisees' => 69, 'RechercheAvanceeParTypeOrg' => 70, 'MenuAgentSocietesExclues' => 71, 'RechercheAvanceeParDomainesActivite' => 72, 'RechercheAvanceeParQualification' => 73, 'RechercheAvanceeParAgrement' => 74, 'ContactAdministratifDansDetailConsultationCoteEntreprise' => 75, 'ConsultationPiecesDossiers' => 76, 'GererAdressesService' => 77, 'TraduireAnnonces' => 78, 'AfficherBlocActionsDansDetailsAnnonces' => 79, 'AutoriserUneSeuleReponsePrincipaleParEntreprise' => 80, 'GenerationAvis' => 81, 'PassationAppliquerDonneesEnsembleLots' => 82, 'AutreAnnonceExtraitPv' => 83, 'AutreAnnonceRapportAchevement' => 84, 'AjoutFichierJointAutreAnnonce' => 85, 'ConsultationModePassation' => 86, 'CompteEntrepriseIdentifiantUnique' => 87, 'GererCertificatsAgent' => 88, 'AutreAnnonceProgrammePrevisionnel' => 89, 'AnnulerConsultation' => 90, 'CfeEntrepriseAccessibleParAgent' => 91, 'CompteEntrepriseCodeNaceReferentiel' => 92, 'CodeNutLtReferentiel' => 93, 'LieuxExecution' => 94, 'CompteEntrepriseDomaineActiviteLtReferentiel' => 95, 'ConsultationDomainesActivitesLtReferentiel' => 96, 'CompteEntrepriseAgrementLtReferentiel' => 97, 'CompteEntrepriseQualificationLtReferentiel' => 98, 'ReponsePasAPas' => 99, 'AgentControleFormatMotDePasse' => 100, 'EntrepriseValidationEmailInscription' => 101, 'TelechargerDceAvecAuthentification' => 102, 'AuthentificationBasic' => 103, 'ReglementConsultation' => 104, 'AnnoncesMarches' => 105, 'CfeDateFinValiditeObligatoire' => 106, 'AssocierDocumentsCfeConsultation' => 107, 'CompteEntrepriseRegion' => 108, 'CompteEntrepriseTelephone2' => 109, 'CompteEntrepriseCnss' => 110, 'CompteEntrepriseRcnum' => 111, 'CompteEntrepriseDomaineActivite' => 112, 'CompteInscritCodeNic' => 113, 'CompteEntrepriseCodeApe' => 114, 'CompteEntrepriseDocumentsCommerciaux' => 115, 'CompteEntrepriseAgrement' => 116, 'CompteEntrepriseMoyensHumains' => 117, 'CompteEntrepriseActiviteDomaineDefense' => 118, 'CompteEntrepriseDonneesFinancieres' => 119, 'EnveloppeAnonymat' => 120, 'PubliciteFormatXml' => 121, 'Article133GenerationPf' => 122, 'EntrepriseRepondreConsultationApresCloture' => 123, 'TelechargementOutilVerifHorodatage' => 124, 'AffichageCodeCpv' => 125, 'ConsultationDomainesActivites' => 126, 'StatistiquesMesureDemat' => 127, 'PublicationProcure' => 128, 'MenuEntrepriseToutesLesConsultations' => 129, 'CompteEntrepriseCpObligatoire' => 130, 'AnnulerDepot' => 131, 'TraduireEntiteAchatArabe' => 132, 'TraduireOrganismeArabe' => 133, 'DecisionCp' => 134, 'DecisionTrancheBudgetaire' => 135, 'DecisionClassement' => 136, 'DecisionAfficherDetailCandidatParDefaut' => 137, 'Article133UploadFichier' => 138, 'MultiLinguismeAgent' => 139, 'CompteEntrepriseIfu' => 140, 'GestionOrganismeParAgent' => 141, 'UtiliserLucene' => 142, 'UtiliserPageHtmlLieuxExecution' => 143, 'PradoValidateurFormatDate' => 144, 'PradoValidateurFormatEmail' => 145, 'SocleExternePpp' => 146, 'ValidationFormatChampsStricte' => 147, 'PoserQuestionNecessiteAuthentification' => 148, 'AutoriserModifProfilInscritAtes' => 149, 'UniciteReferenceConsultation' => 150, 'RegistrePapierRcnumRcvilleObligatoires' => 151, 'RegistrePapierAdresseCpVilleObligatoires' => 152, 'TelechargerDceSansIdentification' => 153, 'GestionEntrepriseParAgent' => 154, 'AutoriserCaracteresSpeciauxDansReference' => 155, 'InscriptionLibreEntreprise' => 156, 'AfficherCodeService' => 157, 'AuthenticateAgentByLogin' => 158, 'AuthenticateAgentByCert' => 159, 'GenererActeDengagement' => 160, 'EntrepriseControleFormatMotDePasse' => 161, 'AutreAnnonceInformation' => 162, 'CreerAutreAnnonce' => 163, 'ConsultationClause' => 164, 'PanierEntreprise' => 165, 'ParametragePubliciteParTypeProcedure' => 166, 'ExportDecision' => 167, 'LieuOuverturePlisObligatoire' => 168, 'RegleMiseEnLigneParEntiteCoordinatrice' => 169, 'GestionNewsletter' => 170, 'PubliciteOpoce' => 171, 'GestionModelesFormulaire' => 172, 'GestionAdressesFacturationJal' => 173, 'PubliciteMarchesEnLigne' => 174, 'DossierAdditif' => 175, 'TypeMarche' => 176, 'TypePrestation' => 177, 'AfficherTjrBlocCaracteristiqueReponse' => 178, 'AlerteMetier' => 179, 'BourseALaSousTraitance' => 180, 'PublierGuides' => 181, 'RechercheAutoCompletion' => 182, 'StatutCompteEntreprise' => 183, 'GestionOrganismes' => 184, 'AccueilEntreprisePersonnalise' => 185, 'InterfaceModuleSub' => 186, 'AuthentificationAgentMultiOrganismes' => 187, 'PartagerConsultation' => 188, 'AnnuaireAcheteursPublics' => 189, 'EntrepriseActionsGroupees' => 190, 'LieuxExecutionCarte' => 191, 'SurchargeReferentiels' => 192, 'ModeRestrictionRgs' => 193, 'AutreAnnonceDecisionResiliation' => 194, 'AutreAnnonceSyntheseRapportAudit' => 195, 'FicheWeka' => 196, 'GenerationAutomatiqueMdpAgent' => 197, 'GenerationAutomatiqueMdpInscrit' => 198, 'ListeAcRgs' => 199, 'ListeConsOrg' => 200, 'MarchePublicSimplifieEntreprise' => 201, 'DemandeValidationControleur' => 202, 'AccesExecContrats' => 203, 'FormeJuridiqueGroupementAttributaire' => 204, 'DateLimiteRemisePlisObligatoire' => 205, 'ModifTypeProcedure' => 206, 'DonneesComplementairesProcedure' => 207, 'FormeMarcheFormePrix' => 208, 'ControleUniciteNumMarche' => 209, 'AffichageNumMarche' => 210, 'AffichageDateFinMarche' => 211, 'AffichageIce' => 212, 'BlocageDepotHorsDelai' => 213, 'ActiverSuiviPv' => 214, 'CaptchaValidateur' => 215, 'DecisionDepuisResultatAnalyse' => 216, 'ModuleFacture' => 217, 'ValidationEntrepriseFacturation' => 218, 'BloquerDepotSiEnvNonDepose' => 219, 'BloquerDepotSignatureInvalide' => 220, 'ConsultationImportLots' => 221, 'DepotSelectionLots' => 222, 'ModificationLotsApresMiseEnLigne' => 223, 'FiltreBdfEntrepriseValide' => 224, 'AffichageIdentifiantFiscale' => 225, 'DecisionCreerContrat' => 226, 'GenerationBiCle' => 227, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAuto' => 0, 'codeCpv' => 1, 'multiLinguismeEntreprise' => 2, 'gestionFournisseursDocsMesSousServices' => 3, 'authenticateInscritByCert' => 4, 'authenticateInscritByLogin' => 5, 'baseQualifieeEntrepriseInsee' => 6, 'gestionBoampMesSousServices' => 7, 'gestionBiCleMesSousServices' => 8, 'nomEntrepriseToujoursVisible' => 9, 'gestionJalMesSousServices' => 10, 'choixLangueAffichageConsultation' => 11, 'compteEntrepriseDonneesComplementaires' => 12, 'annuaireEntitesAchatVisibleParEntreprise' => 13, 'affichageRechercheAvanceeAgentAcSadTransversaux' => 14, 'encheresEntreprise' => 15, 'socleInterne' => 16, 'moduleCertificat' => 17, 'socleExterneAgent' => 18, 'afficherImageOrganisme' => 19, 'socleExterneEntreprise' => 20, 'portailDefenseEntreprise' => 21, 'compteEntrepriseProvince' => 22, 'compteEntrepriseTelephone3' => 23, 'compteEntrepriseTaxProf' => 24, 'compteEntrepriseRcville' => 25, 'compteEntrepriseDeclarationHonneur' => 26, 'compteEntrepriseQualification' => 27, 'compteEntrepriseMoyensTechniques' => 28, 'compteEntreprisePrestationsRealisees' => 29, 'compteEntrepriseChiffreAffaireProductionBiensServices' => 30, 'enveloppeOffreTechnique' => 31, 'compteInscritChoixProfil' => 32, 'procedureAdaptee' => 33, 'compteEntrepriseSiren' => 34, 'compteEntrepriseActivationInscriptionParAgent' => 35, 'menuEntrepriseConsultationsEnCours' => 36, 'compteEntrepriseCapitalSocial' => 37, 'mailActivationCompteInscritEntreprise' => 38, 'decisionDateNotification' => 39, 'decisionPmiPme' => 40, 'decisionNaturePrestations' => 41, 'decisionObjetMarche' => 42, 'decisionNote' => 43, 'decisionFicheRecensement' => 44, 'registrePapierMailObligatoire' => 45, 'menuEntrepriseIndicateursCles' => 46, 'ajoutRpaChampEmail' => 47, 'ajoutRpaChampTelephone' => 48, 'ajoutRpaChampFax' => 49, 'entreprisePoserQuestionSansPj' => 50, 'urlDemarcheAgent' => 51, 'urlDemarcheEntreprise' => 52, 'siretDetailEntiteAchat' => 53, 'presenceElu' => 54, 'gererMonService' => 55, 'depouillementEnveloppeDependRatEnveloppePrecedente' => 56, 'consultationAdresseRetraisDossiers' => 57, 'consultationAdresseDepotOffres' => 58, 'consultationCautionProvisoire' => 59, 'consultationLieuOuverturePlis' => 60, 'consultationQualification' => 61, 'consultationAgrement' => 62, 'consultationEchantillonsDemandes' => 63, 'consultationReunion' => 64, 'consultationVisiteDesLieux' => 65, 'consultationPrixAcquisition' => 66, 'resultatAnalyseAvantDecision' => 67, 'creationInscritParAtes' => 68, 'consultationVariantesAutorisees' => 69, 'rechercheAvanceeParTypeOrg' => 70, 'menuAgentSocietesExclues' => 71, 'rechercheAvanceeParDomainesActivite' => 72, 'rechercheAvanceeParQualification' => 73, 'rechercheAvanceeParAgrement' => 74, 'contactAdministratifDansDetailConsultationCoteEntreprise' => 75, 'consultationPiecesDossiers' => 76, 'gererAdressesService' => 77, 'traduireAnnonces' => 78, 'afficherBlocActionsDansDetailsAnnonces' => 79, 'autoriserUneSeuleReponsePrincipaleParEntreprise' => 80, 'generationAvis' => 81, 'passationAppliquerDonneesEnsembleLots' => 82, 'autreAnnonceExtraitPv' => 83, 'autreAnnonceRapportAchevement' => 84, 'ajoutFichierJointAutreAnnonce' => 85, 'consultationModePassation' => 86, 'compteEntrepriseIdentifiantUnique' => 87, 'gererCertificatsAgent' => 88, 'autreAnnonceProgrammePrevisionnel' => 89, 'annulerConsultation' => 90, 'cfeEntrepriseAccessibleParAgent' => 91, 'compteEntrepriseCodeNaceReferentiel' => 92, 'codeNutLtReferentiel' => 93, 'lieuxExecution' => 94, 'compteEntrepriseDomaineActiviteLtReferentiel' => 95, 'consultationDomainesActivitesLtReferentiel' => 96, 'compteEntrepriseAgrementLtReferentiel' => 97, 'compteEntrepriseQualificationLtReferentiel' => 98, 'reponsePasAPas' => 99, 'agentControleFormatMotDePasse' => 100, 'entrepriseValidationEmailInscription' => 101, 'telechargerDceAvecAuthentification' => 102, 'authentificationBasic' => 103, 'reglementConsultation' => 104, 'annoncesMarches' => 105, 'cfeDateFinValiditeObligatoire' => 106, 'associerDocumentsCfeConsultation' => 107, 'compteEntrepriseRegion' => 108, 'compteEntrepriseTelephone2' => 109, 'compteEntrepriseCnss' => 110, 'compteEntrepriseRcnum' => 111, 'compteEntrepriseDomaineActivite' => 112, 'compteInscritCodeNic' => 113, 'compteEntrepriseCodeApe' => 114, 'compteEntrepriseDocumentsCommerciaux' => 115, 'compteEntrepriseAgrement' => 116, 'compteEntrepriseMoyensHumains' => 117, 'compteEntrepriseActiviteDomaineDefense' => 118, 'compteEntrepriseDonneesFinancieres' => 119, 'enveloppeAnonymat' => 120, 'publiciteFormatXml' => 121, 'article133GenerationPf' => 122, 'entrepriseRepondreConsultationApresCloture' => 123, 'telechargementOutilVerifHorodatage' => 124, 'affichageCodeCpv' => 125, 'consultationDomainesActivites' => 126, 'statistiquesMesureDemat' => 127, 'publicationProcure' => 128, 'menuEntrepriseToutesLesConsultations' => 129, 'compteEntrepriseCpObligatoire' => 130, 'annulerDepot' => 131, 'traduireEntiteAchatArabe' => 132, 'traduireOrganismeArabe' => 133, 'decisionCp' => 134, 'decisionTrancheBudgetaire' => 135, 'decisionClassement' => 136, 'decisionAfficherDetailCandidatParDefaut' => 137, 'article133UploadFichier' => 138, 'multiLinguismeAgent' => 139, 'compteEntrepriseIfu' => 140, 'gestionOrganismeParAgent' => 141, 'utiliserLucene' => 142, 'utiliserPageHtmlLieuxExecution' => 143, 'pradoValidateurFormatDate' => 144, 'pradoValidateurFormatEmail' => 145, 'socleExternePpp' => 146, 'validationFormatChampsStricte' => 147, 'poserQuestionNecessiteAuthentification' => 148, 'autoriserModifProfilInscritAtes' => 149, 'uniciteReferenceConsultation' => 150, 'registrePapierRcnumRcvilleObligatoires' => 151, 'registrePapierAdresseCpVilleObligatoires' => 152, 'telechargerDceSansIdentification' => 153, 'gestionEntrepriseParAgent' => 154, 'autoriserCaracteresSpeciauxDansReference' => 155, 'inscriptionLibreEntreprise' => 156, 'afficherCodeService' => 157, 'authenticateAgentByLogin' => 158, 'authenticateAgentByCert' => 159, 'genererActeDengagement' => 160, 'entrepriseControleFormatMotDePasse' => 161, 'autreAnnonceInformation' => 162, 'creerAutreAnnonce' => 163, 'consultationClause' => 164, 'panierEntreprise' => 165, 'parametragePubliciteParTypeProcedure' => 166, 'exportDecision' => 167, 'lieuOuverturePlisObligatoire' => 168, 'regleMiseEnLigneParEntiteCoordinatrice' => 169, 'gestionNewsletter' => 170, 'publiciteOpoce' => 171, 'gestionModelesFormulaire' => 172, 'gestionAdressesFacturationJal' => 173, 'publiciteMarchesEnLigne' => 174, 'dossierAdditif' => 175, 'typeMarche' => 176, 'typePrestation' => 177, 'afficherTjrBlocCaracteristiqueReponse' => 178, 'alerteMetier' => 179, 'bourseALaSousTraitance' => 180, 'publierGuides' => 181, 'rechercheAutoCompletion' => 182, 'statutCompteEntreprise' => 183, 'gestionOrganismes' => 184, 'accueilEntreprisePersonnalise' => 185, 'interfaceModuleSub' => 186, 'authentificationAgentMultiOrganismes' => 187, 'partagerConsultation' => 188, 'annuaireAcheteursPublics' => 189, 'entrepriseActionsGroupees' => 190, 'lieuxExecutionCarte' => 191, 'surchargeReferentiels' => 192, 'modeRestrictionRgs' => 193, 'autreAnnonceDecisionResiliation' => 194, 'autreAnnonceSyntheseRapportAudit' => 195, 'ficheWeka' => 196, 'generationAutomatiqueMdpAgent' => 197, 'generationAutomatiqueMdpInscrit' => 198, 'listeAcRgs' => 199, 'listeConsOrg' => 200, 'marchePublicSimplifieEntreprise' => 201, 'demandeValidationControleur' => 202, 'accesExecContrats' => 203, 'formeJuridiqueGroupementAttributaire' => 204, 'dateLimiteRemisePlisObligatoire' => 205, 'modifTypeProcedure' => 206, 'donneesComplementairesProcedure' => 207, 'formeMarcheFormePrix' => 208, 'controleUniciteNumMarche' => 209, 'affichageNumMarche' => 210, 'affichageDateFinMarche' => 211, 'affichageIce' => 212, 'blocageDepotHorsDelai' => 213, 'activerSuiviPv' => 214, 'captchaValidateur' => 215, 'decisionDepuisResultatAnalyse' => 216, 'moduleFacture' => 217, 'validationEntrepriseFacturation' => 218, 'bloquerDepotSiEnvNonDepose' => 219, 'bloquerDepotSignatureInvalide' => 220, 'consultationImportLots' => 221, 'depotSelectionLots' => 222, 'modificationLotsApresMiseEnLigne' => 223, 'filtreBdfEntrepriseValide' => 224, 'affichageIdentifiantFiscale' => 225, 'decisionCreerContrat' => 226, 'generationBiCle' => 227, ),
        BasePeer::TYPE_COLNAME => array (CommonConfigurationPlateformePeer::ID_AUTO => 0, CommonConfigurationPlateformePeer::CODE_CPV => 1, CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE => 2, CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES => 3, CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT => 4, CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN => 5, CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE => 6, CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES => 7, CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES => 8, CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE => 9, CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES => 10, CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION => 11, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES => 12, CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE => 13, CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX => 14, CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE => 15, CommonConfigurationPlateformePeer::SOCLE_INTERNE => 16, CommonConfigurationPlateformePeer::MODULE_CERTIFICAT => 17, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT => 18, CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME => 19, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE => 20, CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE => 21, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE => 22, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3 => 23, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF => 24, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE => 25, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR => 26, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION => 27, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES => 28, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES => 29, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES => 30, CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE => 31, CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL => 32, CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE => 33, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN => 34, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT => 35, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS => 36, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL => 37, CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE => 38, CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION => 39, CommonConfigurationPlateformePeer::DECISION_PMI_PME => 40, CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS => 41, CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE => 42, CommonConfigurationPlateformePeer::DECISION_NOTE => 43, CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT => 44, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE => 45, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES => 46, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL => 47, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE => 48, CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX => 49, CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ => 50, CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT => 51, CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE => 52, CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT => 53, CommonConfigurationPlateformePeer::PRESENCE_ELU => 54, CommonConfigurationPlateformePeer::GERER_MON_SERVICE => 55, CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE => 56, CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS => 57, CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES => 58, CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE => 59, CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS => 60, CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION => 61, CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT => 62, CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES => 63, CommonConfigurationPlateformePeer::CONSULTATION_REUNION => 64, CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX => 65, CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION => 66, CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION => 67, CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES => 68, CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES => 69, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG => 70, CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES => 71, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE => 72, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION => 73, CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT => 74, CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE => 75, CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS => 76, CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE => 77, CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES => 78, CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES => 79, CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE => 80, CommonConfigurationPlateformePeer::GENERATION_AVIS => 81, CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS => 82, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV => 83, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT => 84, CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE => 85, CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION => 86, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE => 87, CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT => 88, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL => 89, CommonConfigurationPlateformePeer::ANNULER_CONSULTATION => 90, CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT => 91, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL => 92, CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL => 93, CommonConfigurationPlateformePeer::LIEUX_EXECUTION => 94, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL => 95, CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL => 96, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL => 97, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL => 98, CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS => 99, CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE => 100, CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION => 101, CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION => 102, CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC => 103, CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION => 104, CommonConfigurationPlateformePeer::ANNONCES_MARCHES => 105, CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE => 106, CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION => 107, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION => 108, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2 => 109, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS => 110, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM => 111, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE => 112, CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC => 113, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE => 114, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX => 115, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT => 116, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS => 117, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE => 118, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES => 119, CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT => 120, CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML => 121, CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF => 122, CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE => 123, CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE => 124, CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV => 125, CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES => 126, CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT => 127, CommonConfigurationPlateformePeer::PUBLICATION_PROCURE => 128, CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS => 129, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE => 130, CommonConfigurationPlateformePeer::ANNULER_DEPOT => 131, CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE => 132, CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE => 133, CommonConfigurationPlateformePeer::DECISION_CP => 134, CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE => 135, CommonConfigurationPlateformePeer::DECISION_CLASSEMENT => 136, CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT => 137, CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER => 138, CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT => 139, CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU => 140, CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT => 141, CommonConfigurationPlateformePeer::UTILISER_LUCENE => 142, CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION => 143, CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE => 144, CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL => 145, CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP => 146, CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE => 147, CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION => 148, CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES => 149, CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION => 150, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES => 151, CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES => 152, CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION => 153, CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT => 154, CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE => 155, CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE => 156, CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE => 157, CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN => 158, CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT => 159, CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT => 160, CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE => 161, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION => 162, CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE => 163, CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE => 164, CommonConfigurationPlateformePeer::PANIER_ENTREPRISE => 165, CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE => 166, CommonConfigurationPlateformePeer::EXPORT_DECISION => 167, CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE => 168, CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE => 169, CommonConfigurationPlateformePeer::GESTION_NEWSLETTER => 170, CommonConfigurationPlateformePeer::PUBLICITE_OPOCE => 171, CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE => 172, CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL => 173, CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE => 174, CommonConfigurationPlateformePeer::DOSSIER_ADDITIF => 175, CommonConfigurationPlateformePeer::TYPE_MARCHE => 176, CommonConfigurationPlateformePeer::TYPE_PRESTATION => 177, CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE => 178, CommonConfigurationPlateformePeer::ALERTE_METIER => 179, CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE => 180, CommonConfigurationPlateformePeer::PUBLIER_GUIDES => 181, CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION => 182, CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE => 183, CommonConfigurationPlateformePeer::GESTION_ORGANISMES => 184, CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE => 185, CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB => 186, CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES => 187, CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION => 188, CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS => 189, CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES => 190, CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE => 191, CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS => 192, CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS => 193, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION => 194, CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT => 195, CommonConfigurationPlateformePeer::FICHE_WEKA => 196, CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT => 197, CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT => 198, CommonConfigurationPlateformePeer::LISTE_AC_RGS => 199, CommonConfigurationPlateformePeer::LISTE_CONS_ORG => 200, CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE => 201, CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR => 202, CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS => 203, CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE => 204, CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE => 205, CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE => 206, CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE => 207, CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX => 208, CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE => 209, CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE => 210, CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE => 211, CommonConfigurationPlateformePeer::AFFICHAGE_ICE => 212, CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI => 213, CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV => 214, CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR => 215, CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE => 216, CommonConfigurationPlateformePeer::MODULE_FACTURE => 217, CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION => 218, CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE => 219, CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE => 220, CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS => 221, CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS => 222, CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE => 223, CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE => 224, CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE => 225, CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT => 226, CommonConfigurationPlateformePeer::GENERATION_BI_CLE => 227, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AUTO' => 0, 'CODE_CPV' => 1, 'MULTI_LINGUISME_ENTREPRISE' => 2, 'GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES' => 3, 'AUTHENTICATE_INSCRIT_BY_CERT' => 4, 'AUTHENTICATE_INSCRIT_BY_LOGIN' => 5, 'BASE_QUALIFIEE_ENTREPRISE_INSEE' => 6, 'GESTION_BOAMP_MES_SOUS_SERVICES' => 7, 'GESTION_BI_CLE_MES_SOUS_SERVICES' => 8, 'NOM_ENTREPRISE_TOUJOURS_VISIBLE' => 9, 'GESTION_JAL_MES_SOUS_SERVICES' => 10, 'CHOIX_LANGUE_AFFICHAGE_CONSULTATION' => 11, 'COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES' => 12, 'ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE' => 13, 'AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX' => 14, 'ENCHERES_ENTREPRISE' => 15, 'SOCLE_INTERNE' => 16, 'MODULE_CERTIFICAT' => 17, 'SOCLE_EXTERNE_AGENT' => 18, 'AFFICHER_IMAGE_ORGANISME' => 19, 'SOCLE_EXTERNE_ENTREPRISE' => 20, 'PORTAIL_DEFENSE_ENTREPRISE' => 21, 'COMPTE_ENTREPRISE_PROVINCE' => 22, 'COMPTE_ENTREPRISE_TELEPHONE3' => 23, 'COMPTE_ENTREPRISE_TAX_PROF' => 24, 'COMPTE_ENTREPRISE_RCVILLE' => 25, 'COMPTE_ENTREPRISE_DECLARATION_HONNEUR' => 26, 'COMPTE_ENTREPRISE_QUALIFICATION' => 27, 'COMPTE_ENTREPRISE_MOYENS_TECHNIQUES' => 28, 'COMPTE_ENTREPRISE_PRESTATIONS_REALISEES' => 29, 'COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES' => 30, 'ENVELOPPE_OFFRE_TECHNIQUE' => 31, 'COMPTE_INSCRIT_CHOIX_PROFIL' => 32, 'PROCEDURE_ADAPTEE' => 33, 'COMPTE_ENTREPRISE_SIREN' => 34, 'COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT' => 35, 'MENU_ENTREPRISE_CONSULTATIONS_EN_COURS' => 36, 'COMPTE_ENTREPRISE_CAPITAL_SOCIAL' => 37, 'MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE' => 38, 'DECISION_DATE_NOTIFICATION' => 39, 'DECISION_PMI_PME' => 40, 'DECISION_NATURE_PRESTATIONS' => 41, 'DECISION_OBJET_MARCHE' => 42, 'DECISION_NOTE' => 43, 'DECISION_FICHE_RECENSEMENT' => 44, 'REGISTRE_PAPIER_MAIL_OBLIGATOIRE' => 45, 'MENU_ENTREPRISE_INDICATEURS_CLES' => 46, 'AJOUT_RPA_CHAMP_EMAIL' => 47, 'AJOUT_RPA_CHAMP_TELEPHONE' => 48, 'AJOUT_RPA_CHAMP_FAX' => 49, 'ENTREPRISE_POSER_QUESTION_SANS_PJ' => 50, 'URL_DEMARCHE_AGENT' => 51, 'URL_DEMARCHE_ENTREPRISE' => 52, 'SIRET_DETAIL_ENTITE_ACHAT' => 53, 'PRESENCE_ELU' => 54, 'GERER_MON_SERVICE' => 55, 'DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE' => 56, 'CONSULTATION_ADRESSE_RETRAIS_DOSSIERS' => 57, 'CONSULTATION_ADRESSE_DEPOT_OFFRES' => 58, 'CONSULTATION_CAUTION_PROVISOIRE' => 59, 'CONSULTATION_LIEU_OUVERTURE_PLIS' => 60, 'CONSULTATION_QUALIFICATION' => 61, 'CONSULTATION_AGREMENT' => 62, 'CONSULTATION_ECHANTILLONS_DEMANDES' => 63, 'CONSULTATION_REUNION' => 64, 'CONSULTATION_VISITE_DES_LIEUX' => 65, 'CONSULTATION_PRIX_ACQUISITION' => 66, 'RESULTAT_ANALYSE_AVANT_DECISION' => 67, 'CREATION_INSCRIT_PAR_ATES' => 68, 'CONSULTATION_VARIANTES_AUTORISEES' => 69, 'RECHERCHE_AVANCEE_PAR_TYPE_ORG' => 70, 'MENU_AGENT_SOCIETES_EXCLUES' => 71, 'RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE' => 72, 'RECHERCHE_AVANCEE_PAR_QUALIFICATION' => 73, 'RECHERCHE_AVANCEE_PAR_AGREMENT' => 74, 'CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE' => 75, 'CONSULTATION_PIECES_DOSSIERS' => 76, 'GERER_ADRESSES_SERVICE' => 77, 'TRADUIRE_ANNONCES' => 78, 'AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES' => 79, 'AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE' => 80, 'GENERATION_AVIS' => 81, 'PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS' => 82, 'AUTRE_ANNONCE_EXTRAIT_PV' => 83, 'AUTRE_ANNONCE_RAPPORT_ACHEVEMENT' => 84, 'AJOUT_FICHIER_JOINT_AUTRE_ANNONCE' => 85, 'CONSULTATION_MODE_PASSATION' => 86, 'COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE' => 87, 'GERER_CERTIFICATS_AGENT' => 88, 'AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL' => 89, 'ANNULER_CONSULTATION' => 90, 'CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT' => 91, 'COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL' => 92, 'CODE_NUT_LT_REFERENTIEL' => 93, 'LIEUX_EXECUTION' => 94, 'COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL' => 95, 'CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL' => 96, 'COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL' => 97, 'COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL' => 98, 'REPONSE_PAS_A_PAS' => 99, 'AGENT_CONTROLE_FORMAT_MOT_DE_PASSE' => 100, 'ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION' => 101, 'TELECHARGER_DCE_AVEC_AUTHENTIFICATION' => 102, 'AUTHENTIFICATION_BASIC' => 103, 'REGLEMENT_CONSULTATION' => 104, 'ANNONCES_MARCHES' => 105, 'CFE_DATE_FIN_VALIDITE_OBLIGATOIRE' => 106, 'ASSOCIER_DOCUMENTS_CFE_CONSULTATION' => 107, 'COMPTE_ENTREPRISE_REGION' => 108, 'COMPTE_ENTREPRISE_TELEPHONE2' => 109, 'COMPTE_ENTREPRISE_CNSS' => 110, 'COMPTE_ENTREPRISE_RCNUM' => 111, 'COMPTE_ENTREPRISE_DOMAINE_ACTIVITE' => 112, 'COMPTE_INSCRIT_CODE_NIC' => 113, 'COMPTE_ENTREPRISE_CODE_APE' => 114, 'COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX' => 115, 'COMPTE_ENTREPRISE_AGREMENT' => 116, 'COMPTE_ENTREPRISE_MOYENS_HUMAINS' => 117, 'COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE' => 118, 'COMPTE_ENTREPRISE_DONNEES_FINANCIERES' => 119, 'ENVELOPPE_ANONYMAT' => 120, 'PUBLICITE_FORMAT_XML' => 121, 'ARTICLE_133_GENERATION_PF' => 122, 'ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE' => 123, 'TELECHARGEMENT_OUTIL_VERIF_HORODATAGE' => 124, 'AFFICHAGE_CODE_CPV' => 125, 'CONSULTATION_DOMAINES_ACTIVITES' => 126, 'STATISTIQUES_MESURE_DEMAT' => 127, 'PUBLICATION_PROCURE' => 128, 'MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS' => 129, 'COMPTE_ENTREPRISE_CP_OBLIGATOIRE' => 130, 'ANNULER_DEPOT' => 131, 'TRADUIRE_ENTITE_ACHAT_ARABE' => 132, 'TRADUIRE_ORGANISME_ARABE' => 133, 'DECISION_CP' => 134, 'DECISION_TRANCHE_BUDGETAIRE' => 135, 'DECISION_CLASSEMENT' => 136, 'DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT' => 137, 'ARTICLE_133_UPLOAD_FICHIER' => 138, 'MULTI_LINGUISME_AGENT' => 139, 'COMPTE_ENTREPRISE_IFU' => 140, 'GESTION_ORGANISME_PAR_AGENT' => 141, 'UTILISER_LUCENE' => 142, 'UTILISER_PAGE_HTML_LIEUX_EXECUTION' => 143, 'PRADO_VALIDATEUR_FORMAT_DATE' => 144, 'PRADO_VALIDATEUR_FORMAT_EMAIL' => 145, 'SOCLE_EXTERNE_PPP' => 146, 'VALIDATION_FORMAT_CHAMPS_STRICTE' => 147, 'POSER_QUESTION_NECESSITE_AUTHENTIFICATION' => 148, 'AUTORISER_MODIF_PROFIL_INSCRIT_ATES' => 149, 'UNICITE_REFERENCE_CONSULTATION' => 150, 'REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES' => 151, 'REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES' => 152, 'TELECHARGER_DCE_SANS_IDENTIFICATION' => 153, 'GESTION_ENTREPRISE_PAR_AGENT' => 154, 'AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE' => 155, 'INSCRIPTION_LIBRE_ENTREPRISE' => 156, 'AFFICHER_CODE_SERVICE' => 157, 'AUTHENTICATE_AGENT_BY_LOGIN' => 158, 'AUTHENTICATE_AGENT_BY_CERT' => 159, 'GENERER_ACTE_DENGAGEMENT' => 160, 'ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE' => 161, 'AUTRE_ANNONCE_INFORMATION' => 162, 'CREER_AUTRE_ANNONCE' => 163, 'CONSULTATION_CLAUSE' => 164, 'PANIER_ENTREPRISE' => 165, 'PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE' => 166, 'EXPORT_DECISION' => 167, 'LIEU_OUVERTURE_PLIS_OBLIGATOIRE' => 168, 'REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE' => 169, 'GESTION_NEWSLETTER' => 170, 'PUBLICITE_OPOCE' => 171, 'GESTION_MODELES_FORMULAIRE' => 172, 'GESTION_ADRESSES_FACTURATION_JAL' => 173, 'PUBLICITE_MARCHES_EN_LIGNE' => 174, 'DOSSIER_ADDITIF' => 175, 'TYPE_MARCHE' => 176, 'TYPE_PRESTATION' => 177, 'AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE' => 178, 'ALERTE_METIER' => 179, 'BOURSE_A_LA_SOUS_TRAITANCE' => 180, 'PUBLIER_GUIDES' => 181, 'RECHERCHE_AUTO_COMPLETION' => 182, 'STATUT_COMPTE_ENTREPRISE' => 183, 'GESTION_ORGANISMES' => 184, 'ACCUEIL_ENTREPRISE_PERSONNALISE' => 185, 'INTERFACE_MODULE_SUB' => 186, 'AUTHENTIFICATION_AGENT_MULTI_ORGANISMES' => 187, 'PARTAGER_CONSULTATION' => 188, 'ANNUAIRE_ACHETEURS_PUBLICS' => 189, 'ENTREPRISE_ACTIONS_GROUPEES' => 190, 'LIEUX_EXECUTION_CARTE' => 191, 'SURCHARGE_REFERENTIELS' => 192, 'MODE_RESTRICTION_RGS' => 193, 'AUTRE_ANNONCE_DECISION_RESILIATION' => 194, 'AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT' => 195, 'FICHE_WEKA' => 196, 'GENERATION_AUTOMATIQUE_MDP_AGENT' => 197, 'GENERATION_AUTOMATIQUE_MDP_INSCRIT' => 198, 'LISTE_AC_RGS' => 199, 'LISTE_CONS_ORG' => 200, 'MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE' => 201, 'DEMANDE_VALIDATION_CONTROLEUR' => 202, 'ACCES_EXEC_CONTRATS' => 203, 'FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE' => 204, 'DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE' => 205, 'MODIF_TYPE_PROCEDURE' => 206, 'DONNEES_COMPLEMENTAIRES_PROCEDURE' => 207, 'FORME_MARCHE_FORME_PRIX' => 208, 'CONTROLE_UNICITE_NUM_MARCHE' => 209, 'AFFICHAGE_NUM_MARCHE' => 210, 'AFFICHAGE_DATE_FIN_MARCHE' => 211, 'AFFICHAGE_ICE' => 212, 'BLOCAGE_DEPOT_HORS_DELAI' => 213, 'ACTIVER_SUIVI_PV' => 214, 'CAPTCHA_VALIDATEUR' => 215, 'DECISION_DEPUIS_RESULTAT_ANALYSE' => 216, 'MODULE_FACTURE' => 217, 'VALIDATION_ENTREPRISE_FACTURATION' => 218, 'BLOQUER_DEPOT_SI_ENV_NON_DEPOSE' => 219, 'BLOQUER_DEPOT_SIGNATURE_INVALIDE' => 220, 'CONSULTATION_IMPORT_LOTS' => 221, 'DEPOT_SELECTION_LOTS' => 222, 'MODIFICATION_LOTS_APRES_MISE_EN_LIGNE' => 223, 'FILTRE_BDF_ENTREPRISE_VALIDE' => 224, 'AFFICHAGE_IDENTIFIANT_FISCALE' => 225, 'DECISION_CREER_CONTRAT' => 226, 'GENERATION_BI_CLE' => 227, ),
        BasePeer::TYPE_FIELDNAME => array ('id_auto' => 0, 'code_cpv' => 1, 'multi_linguisme_entreprise' => 2, 'gestion_fournisseurs_docs_mes_sous_services' => 3, 'authenticate_inscrit_by_cert' => 4, 'authenticate_inscrit_by_login' => 5, 'base_qualifiee_entreprise_insee' => 6, 'gestion_boamp_mes_sous_services' => 7, 'gestion_bi_cle_mes_sous_services' => 8, 'nom_entreprise_toujours_visible' => 9, 'gestion_jal_mes_sous_services' => 10, 'choix_langue_affichage_consultation' => 11, 'compte_entreprise_donnees_complementaires' => 12, 'annuaire_entites_achat_visible_par_entreprise' => 13, 'affichage_recherche_avancee_agent_ac_sad_transversaux' => 14, 'encheres_entreprise' => 15, 'socle_interne' => 16, 'module_certificat' => 17, 'socle_externe_agent' => 18, 'afficher_image_organisme' => 19, 'socle_externe_entreprise' => 20, 'portail_defense_entreprise' => 21, 'compte_entreprise_province' => 22, 'compte_entreprise_telephone3' => 23, 'compte_entreprise_tax_prof' => 24, 'compte_entreprise_rcville' => 25, 'compte_entreprise_declaration_honneur' => 26, 'compte_entreprise_qualification' => 27, 'compte_entreprise_moyens_techniques' => 28, 'compte_entreprise_prestations_realisees' => 29, 'compte_entreprise_chiffre_affaire_production_biens_services' => 30, 'enveloppe_offre_technique' => 31, 'compte_inscrit_choix_profil' => 32, 'procedure_adaptee' => 33, 'compte_entreprise_siren' => 34, 'compte_entreprise_activation_inscription_par_agent' => 35, 'menu_entreprise_consultations_en_cours' => 36, 'compte_entreprise_capital_social' => 37, 'mail_activation_compte_inscrit_entreprise' => 38, 'decision_date_notification' => 39, 'decision_pmi_pme' => 40, 'decision_nature_prestations' => 41, 'decision_objet_marche' => 42, 'decision_note' => 43, 'decision_fiche_recensement' => 44, 'registre_papier_mail_obligatoire' => 45, 'menu_entreprise_indicateurs_cles' => 46, 'ajout_rpa_champ_email' => 47, 'ajout_rpa_champ_telephone' => 48, 'ajout_rpa_champ_fax' => 49, 'entreprise_poser_question_sans_pj' => 50, 'url_demarche_agent' => 51, 'url_demarche_entreprise' => 52, 'siret_detail_entite_achat' => 53, 'presence_elu' => 54, 'gerer_mon_service' => 55, 'depouillement_enveloppe_depend_RAT_enveloppe_precedente' => 56, 'consultation_adresse_retrais_dossiers' => 57, 'consultation_adresse_depot_offres' => 58, 'consultation_caution_provisoire' => 59, 'consultation_lieu_ouverture_plis' => 60, 'consultation_qualification' => 61, 'consultation_agrement' => 62, 'consultation_echantillons_demandes' => 63, 'consultation_reunion' => 64, 'consultation_visite_des_lieux' => 65, 'consultation_prix_acquisition' => 66, 'resultat_analyse_avant_decision' => 67, 'creation_inscrit_par_ates' => 68, 'consultation_variantes_autorisees' => 69, 'recherche_avancee_par_type_org' => 70, 'menu_agent_societes_exclues' => 71, 'recherche_avancee_par_domaines_activite' => 72, 'recherche_avancee_par_qualification' => 73, 'recherche_avancee_par_agrement' => 74, 'contact_administratif_dans_detail_consultation_cote_entreprise' => 75, 'consultation_pieces_dossiers' => 76, 'gerer_adresses_service' => 77, 'traduire_annonces' => 78, 'afficher_bloc_actions_dans_details_annonces' => 79, 'autoriser_une_seule_reponse_principale_par_entreprise' => 80, 'generation_avis' => 81, 'passation_appliquer_donnees_ensemble_lots' => 82, 'autre_annonce_extrait_pv' => 83, 'autre_annonce_rapport_achevement' => 84, 'ajout_fichier_joint_autre_annonce' => 85, 'consultation_mode_passation' => 86, 'compte_entreprise_identifiant_unique' => 87, 'gerer_certificats_agent' => 88, 'autre_annonce_programme_previsionnel' => 89, 'annuler_consultation' => 90, 'cfe_entreprise_accessible_par_agent' => 91, 'compte_entreprise_code_nace_referentiel' => 92, 'code_nut_lt_referentiel' => 93, 'lieux_execution' => 94, 'compte_entreprise_domaine_activite_lt_referentiel' => 95, 'consultation_domaines_activites_lt_referentiel' => 96, 'compte_entreprise_agrement_lt_referentiel' => 97, 'compte_entreprise_qualification_lt_referentiel' => 98, 'reponse_pas_a_pas' => 99, 'agent_controle_format_mot_de_passe' => 100, 'entreprise_validation_email_inscription' => 101, 'telecharger_dce_avec_authentification' => 102, 'authentification_basic' => 103, 'reglement_consultation' => 104, 'annonces_marches' => 105, 'cfe_date_fin_validite_obligatoire' => 106, 'associer_documents_cfe_consultation' => 107, 'compte_entreprise_region' => 108, 'compte_entreprise_telephone2' => 109, 'compte_entreprise_cnss' => 110, 'compte_entreprise_rcnum' => 111, 'compte_entreprise_domaine_activite' => 112, 'compte_inscrit_code_nic' => 113, 'compte_entreprise_code_ape' => 114, 'compte_entreprise_documents_commerciaux' => 115, 'compte_entreprise_agrement' => 116, 'compte_entreprise_moyens_humains' => 117, 'compte_entreprise_activite_domaine_defense' => 118, 'compte_entreprise_donnees_financieres' => 119, 'enveloppe_anonymat' => 120, 'publicite_format_xml' => 121, 'article_133_generation_pf' => 122, 'entreprise_repondre_consultation_apres_cloture' => 123, 'telechargement_outil_verif_horodatage' => 124, 'affichage_code_cpv' => 125, 'consultation_domaines_activites' => 126, 'statistiques_mesure_demat' => 127, 'publication_procure' => 128, 'menu_entreprise_toutes_les_consultations' => 129, 'compte_entreprise_cp_obligatoire' => 130, 'annuler_depot' => 131, 'traduire_entite_achat_arabe' => 132, 'traduire_organisme_arabe' => 133, 'decision_cp' => 134, 'decision_tranche_budgetaire' => 135, 'decision_classement' => 136, 'decision_afficher_detail_candidat_par_defaut' => 137, 'article_133_upload_fichier' => 138, 'multi_linguisme_agent' => 139, 'compte_entreprise_ifu' => 140, 'gestion_organisme_par_agent' => 141, 'utiliser_lucene' => 142, 'utiliser_page_html_lieux_execution' => 143, 'prado_validateur_format_date' => 144, 'prado_validateur_format_email' => 145, 'socle_externe_ppp' => 146, 'validation_format_champs_stricte' => 147, 'poser_question_necessite_authentification' => 148, 'autoriser_modif_profil_inscrit_ates' => 149, 'unicite_reference_consultation' => 150, 'registre_papier_rcnum_rcville_obligatoires' => 151, 'registre_papier_adresse_cp_ville_obligatoires' => 152, 'telecharger_dce_sans_identification' => 153, 'gestion_entreprise_par_agent' => 154, 'autoriser_caracteres_speciaux_dans_reference' => 155, 'inscription_libre_entreprise' => 156, 'afficher_code_service' => 157, 'authenticate_agent_by_login' => 158, 'authenticate_agent_by_cert' => 159, 'generer_acte_dengagement' => 160, 'entreprise_controle_format_mot_de_passe' => 161, 'autre_annonce_information' => 162, 'creer_autre_annonce' => 163, 'consultation_clause' => 164, 'panier_entreprise' => 165, 'parametrage_publicite_par_type_procedure' => 166, 'export_decision' => 167, 'lieu_ouverture_plis_obligatoire' => 168, 'regle_mise_en_ligne_par_entite_coordinatrice' => 169, 'gestion_newsletter' => 170, 'publicite_opoce' => 171, 'gestion_modeles_formulaire' => 172, 'gestion_adresses_facturation_JAL' => 173, 'publicite_marches_en_ligne' => 174, 'dossier_additif' => 175, 'type_marche' => 176, 'type_prestation' => 177, 'afficher_tjr_bloc_caracteristique_reponse' => 178, 'alerte_metier' => 179, 'bourse_a_la_sous_traitance' => 180, 'publier_guides' => 181, 'recherche_auto_completion' => 182, 'statut_compte_entreprise' => 183, 'gestion_organismes' => 184, 'accueil_entreprise_personnalise' => 185, 'interface_module_sub' => 186, 'authentification_agent_multi_organismes' => 187, 'partager_consultation' => 188, 'annuaire_acheteurs_publics' => 189, 'entreprise_actions_groupees' => 190, 'lieux_execution_carte' => 191, 'surcharge_referentiels' => 192, 'Mode_Restriction_RGS' => 193, 'autre_annonce_decision_resiliation' => 194, 'autre_annonce_synthese_rapport_audit' => 195, 'fiche_weka' => 196, 'generation_automatique_mdp_agent' => 197, 'generation_automatique_mdp_inscrit' => 198, 'liste_ac_rgs' => 199, 'liste_cons_org' => 200, 'marche_public_simplifie_entreprise' => 201, 'demande_validation_controleur' => 202, 'acces_exec_contrats' => 203, 'forme_juridique_groupement_attributaire' => 204, 'date_limite_remise_plis_obligatoire' => 205, 'modif_type_procedure' => 206, 'donnees_complementaires_procedure' => 207, 'forme_marche_forme_prix' => 208, 'controle_unicite_num_marche' => 209, 'affichage_num_marche' => 210, 'affichage_date_fin_marche' => 211, 'affichage_ice' => 212, 'blocage_depot_hors_delai' => 213, 'activer_suivi_pv' => 214, 'captcha_validateur' => 215, 'decision_depuis_resultat_analyse' => 216, 'module_facture' => 217, 'validation_entreprise_facturation' => 218, 'bloquer_depot_si_env_non_depose' => 219, 'bloquer_depot_signature_invalide' => 220, 'consultation_import_lots' => 221, 'depot_selection_lots' => 222, 'modification_lots_apres_mise_en_ligne' => 223, 'filtre_bdf_entreprise_valide' => 224, 'affichage_identifiant_fiscale' => 225, 'decision_creer_contrat' => 226, 'generation_bi_cle' => 227, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, 163, 164, 165, 166, 167, 168, 169, 170, 171, 172, 173, 174, 175, 176, 177, 178, 179, 180, 181, 182, 183, 184, 185, 186, 187, 188, 189, 190, 191, 192, 193, 194, 195, 196, 197, 198, 199, 200, 201, 202, 203, 204, 205, 206, 207, 208, 209, 210, 211, 212, 213, 214, 215, 216, 217, 218, 219, 220, 221, 222, 223, 224, 225, 226, 227, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonConfigurationPlateformePeer::CODE_CPV => array(
            CommonConfigurationPlateformePeer::CODE_CPV_0,
            CommonConfigurationPlateformePeer::CODE_CPV_1,
        ),
        CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES => array(
            CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES_0,
            CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT => array(
            CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT_0,
            CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN => array(
            CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN_0,
            CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN_1,
        ),
        CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE => array(
            CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE_0,
            CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES => array(
            CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES_0,
            CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES => array(
            CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES_0,
            CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES_1,
        ),
        CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE => array(
            CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE_0,
            CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES => array(
            CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES_0,
            CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES_1,
        ),
        CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION => array(
            CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION_0,
            CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES_1,
        ),
        CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX_1,
        ),
        CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::SOCLE_INTERNE => array(
            CommonConfigurationPlateformePeer::SOCLE_INTERNE_0,
            CommonConfigurationPlateformePeer::SOCLE_INTERNE_1,
        ),
        CommonConfigurationPlateformePeer::MODULE_CERTIFICAT => array(
            CommonConfigurationPlateformePeer::MODULE_CERTIFICAT_0,
            CommonConfigurationPlateformePeer::MODULE_CERTIFICAT_1,
        ),
        CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT => array(
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT_0,
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME => array(
            CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME_0,
            CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME_1,
        ),
        CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3 => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES_1,
        ),
        CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE => array(
            CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE_0,
            CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL => array(
            CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL_0,
            CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL_1,
        ),
        CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE => array(
            CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE_0,
            CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS => array(
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS_0,
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL_1,
        ),
        CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION => array(
            CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION_0,
            CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_PMI_PME => array(
            CommonConfigurationPlateformePeer::DECISION_PMI_PME_0,
            CommonConfigurationPlateformePeer::DECISION_PMI_PME_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS => array(
            CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS_0,
            CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE => array(
            CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE_0,
            CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_NOTE => array(
            CommonConfigurationPlateformePeer::DECISION_NOTE_0,
            CommonConfigurationPlateformePeer::DECISION_NOTE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT => array(
            CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT_0,
            CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT_1,
        ),
        CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE => array(
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE_0,
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE_1,
        ),
        CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES => array(
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES_0,
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES_1,
        ),
        CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL => array(
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL_0,
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL_1,
        ),
        CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE => array(
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE_0,
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE_1,
        ),
        CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX => array(
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX_0,
            CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX_1,
        ),
        CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ => array(
            CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ_0,
            CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ_1,
        ),
        CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT => array(
            CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT_0,
            CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT => array(
            CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT_0,
            CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT_1,
        ),
        CommonConfigurationPlateformePeer::PRESENCE_ELU => array(
            CommonConfigurationPlateformePeer::PRESENCE_ELU_0,
            CommonConfigurationPlateformePeer::PRESENCE_ELU_1,
        ),
        CommonConfigurationPlateformePeer::GERER_MON_SERVICE => array(
            CommonConfigurationPlateformePeer::GERER_MON_SERVICE_0,
            CommonConfigurationPlateformePeer::GERER_MON_SERVICE_1,
        ),
        CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE => array(
            CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE_0,
            CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS => array(
            CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS_0,
            CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES => array(
            CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES_0,
            CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE => array(
            CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE_0,
            CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS => array(
            CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS_0,
            CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION => array(
            CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION_0,
            CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT => array(
            CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT_0,
            CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES => array(
            CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES_0,
            CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_REUNION => array(
            CommonConfigurationPlateformePeer::CONSULTATION_REUNION_0,
            CommonConfigurationPlateformePeer::CONSULTATION_REUNION_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX => array(
            CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX_0,
            CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION => array(
            CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION_0,
            CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION_1,
        ),
        CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION => array(
            CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION_0,
            CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION_1,
        ),
        CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES => array(
            CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES_0,
            CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES => array(
            CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES_0,
            CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES_1,
        ),
        CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG => array(
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG_0,
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG_1,
        ),
        CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES => array(
            CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES_0,
            CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES_1,
        ),
        CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE => array(
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE_0,
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE_1,
        ),
        CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION => array(
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION_0,
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT => array(
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT_0,
            CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT_1,
        ),
        CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS => array(
            CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS_0,
            CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS_1,
        ),
        CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE => array(
            CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE_0,
            CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE_1,
        ),
        CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES => array(
            CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES_0,
            CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES => array(
            CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES_0,
            CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES_1,
        ),
        CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::GENERATION_AVIS => array(
            CommonConfigurationPlateformePeer::GENERATION_AVIS_0,
            CommonConfigurationPlateformePeer::GENERATION_AVIS_1,
        ),
        CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS => array(
            CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS_0,
            CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT_1,
        ),
        CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE => array(
            CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE_0,
            CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION => array(
            CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION_0,
            CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE_1,
        ),
        CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT => array(
            CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT_0,
            CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL_1,
        ),
        CommonConfigurationPlateformePeer::ANNULER_CONSULTATION => array(
            CommonConfigurationPlateformePeer::ANNULER_CONSULTATION_0,
            CommonConfigurationPlateformePeer::ANNULER_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT => array(
            CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT_0,
            CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::LIEUX_EXECUTION => array(
            CommonConfigurationPlateformePeer::LIEUX_EXECUTION_0,
            CommonConfigurationPlateformePeer::LIEUX_EXECUTION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL_1,
        ),
        CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS => array(
            CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS_0,
            CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS_1,
        ),
        CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE => array(
            CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE_0,
            CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE_1,
        ),
        CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION => array(
            CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION_0,
            CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION_1,
        ),
        CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION => array(
            CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION_0,
            CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC => array(
            CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC_0,
            CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC_1,
        ),
        CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION => array(
            CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION_0,
            CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::ANNONCES_MARCHES => array(
            CommonConfigurationPlateformePeer::ANNONCES_MARCHES_0,
            CommonConfigurationPlateformePeer::ANNONCES_MARCHES_1,
        ),
        CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE => array(
            CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE_0,
            CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE_1,
        ),
        CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION => array(
            CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION_0,
            CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2 => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC => array(
            CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC_0,
            CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES_1,
        ),
        CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT => array(
            CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT_0,
            CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT_1,
        ),
        CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML => array(
            CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML_0,
            CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML_1,
        ),
        CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF => array(
            CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF_0,
            CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF_1,
        ),
        CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE => array(
            CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE_0,
            CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE_1,
        ),
        CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE => array(
            CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE_0,
            CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES => array(
            CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_0,
            CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_1,
        ),
        CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT => array(
            CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT_0,
            CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT_1,
        ),
        CommonConfigurationPlateformePeer::PUBLICATION_PROCURE => array(
            CommonConfigurationPlateformePeer::PUBLICATION_PROCURE_0,
            CommonConfigurationPlateformePeer::PUBLICATION_PROCURE_1,
        ),
        CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS => array(
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS_0,
            CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE_1,
        ),
        CommonConfigurationPlateformePeer::ANNULER_DEPOT => array(
            CommonConfigurationPlateformePeer::ANNULER_DEPOT_0,
            CommonConfigurationPlateformePeer::ANNULER_DEPOT_1,
        ),
        CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE => array(
            CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE_0,
            CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE_1,
        ),
        CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE => array(
            CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE_0,
            CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_CP => array(
            CommonConfigurationPlateformePeer::DECISION_CP_0,
            CommonConfigurationPlateformePeer::DECISION_CP_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE => array(
            CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE_0,
            CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_CLASSEMENT => array(
            CommonConfigurationPlateformePeer::DECISION_CLASSEMENT_0,
            CommonConfigurationPlateformePeer::DECISION_CLASSEMENT_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT => array(
            CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT_0,
            CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT_1,
        ),
        CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER => array(
            CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER_0,
            CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER_1,
        ),
        CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT => array(
            CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT_0,
            CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU => array(
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU_0,
            CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT => array(
            CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT_0,
            CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::UTILISER_LUCENE => array(
            CommonConfigurationPlateformePeer::UTILISER_LUCENE_0,
            CommonConfigurationPlateformePeer::UTILISER_LUCENE_1,
        ),
        CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION => array(
            CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION_0,
            CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION_1,
        ),
        CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE => array(
            CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE_0,
            CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE_1,
        ),
        CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL => array(
            CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL_0,
            CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL_1,
        ),
        CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP => array(
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP_0,
            CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP_1,
        ),
        CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE => array(
            CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE_0,
            CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE_1,
        ),
        CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION => array(
            CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION_0,
            CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES => array(
            CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES_0,
            CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES_1,
        ),
        CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION => array(
            CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION_0,
            CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES => array(
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES_0,
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES_1,
        ),
        CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES => array(
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES_0,
            CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES_1,
        ),
        CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION => array(
            CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION_0,
            CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT => array(
            CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT_0,
            CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE => array(
            CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE_0,
            CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE_1,
        ),
        CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE => array(
            CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE_0,
            CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN => array(
            CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN_0,
            CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT => array(
            CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT_0,
            CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT_1,
        ),
        CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT => array(
            CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT_0,
            CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT_1,
        ),
        CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE => array(
            CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE_0,
            CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION_1,
        ),
        CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE => array(
            CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE_0,
            CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE => array(
            CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE_0,
            CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE_1,
        ),
        CommonConfigurationPlateformePeer::PANIER_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::PANIER_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::PANIER_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE => array(
            CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE_0,
            CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE_1,
        ),
        CommonConfigurationPlateformePeer::EXPORT_DECISION => array(
            CommonConfigurationPlateformePeer::EXPORT_DECISION_0,
            CommonConfigurationPlateformePeer::EXPORT_DECISION_1,
        ),
        CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE => array(
            CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE_0,
            CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE_1,
        ),
        CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE => array(
            CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE_0,
            CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_NEWSLETTER => array(
            CommonConfigurationPlateformePeer::GESTION_NEWSLETTER_0,
            CommonConfigurationPlateformePeer::GESTION_NEWSLETTER_1,
        ),
        CommonConfigurationPlateformePeer::PUBLICITE_OPOCE => array(
            CommonConfigurationPlateformePeer::PUBLICITE_OPOCE_0,
            CommonConfigurationPlateformePeer::PUBLICITE_OPOCE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE => array(
            CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE_0,
            CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL => array(
            CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL_0,
            CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL_1,
        ),
        CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE => array(
            CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE_0,
            CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE_1,
        ),
        CommonConfigurationPlateformePeer::DOSSIER_ADDITIF => array(
            CommonConfigurationPlateformePeer::DOSSIER_ADDITIF_0,
            CommonConfigurationPlateformePeer::DOSSIER_ADDITIF_1,
        ),
        CommonConfigurationPlateformePeer::TYPE_MARCHE => array(
            CommonConfigurationPlateformePeer::TYPE_MARCHE_0,
            CommonConfigurationPlateformePeer::TYPE_MARCHE_1,
        ),
        CommonConfigurationPlateformePeer::TYPE_PRESTATION => array(
            CommonConfigurationPlateformePeer::TYPE_PRESTATION_0,
            CommonConfigurationPlateformePeer::TYPE_PRESTATION_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE => array(
            CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE_0,
            CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE_1,
        ),
        CommonConfigurationPlateformePeer::ALERTE_METIER => array(
            CommonConfigurationPlateformePeer::ALERTE_METIER_0,
            CommonConfigurationPlateformePeer::ALERTE_METIER_1,
        ),
        CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE => array(
            CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE_0,
            CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE_1,
        ),
        CommonConfigurationPlateformePeer::PUBLIER_GUIDES => array(
            CommonConfigurationPlateformePeer::PUBLIER_GUIDES_0,
            CommonConfigurationPlateformePeer::PUBLIER_GUIDES_1,
        ),
        CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION => array(
            CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION_0,
            CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION_1,
        ),
        CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::GESTION_ORGANISMES => array(
            CommonConfigurationPlateformePeer::GESTION_ORGANISMES_0,
            CommonConfigurationPlateformePeer::GESTION_ORGANISMES_1,
        ),
        CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE => array(
            CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE_0,
            CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE_1,
        ),
        CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB => array(
            CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB_0,
            CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB_1,
        ),
        CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES => array(
            CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES_0,
            CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES_1,
        ),
        CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION => array(
            CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION_0,
            CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION_1,
        ),
        CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS => array(
            CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS_0,
            CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS_1,
        ),
        CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES => array(
            CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES_0,
            CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES_1,
        ),
        CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE => array(
            CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE_0,
            CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE_1,
        ),
        CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS => array(
            CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS_0,
            CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS_1,
        ),
        CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS => array(
            CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS_0,
            CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION_1,
        ),
        CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT => array(
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT_0,
            CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT_1,
        ),
        CommonConfigurationPlateformePeer::FICHE_WEKA => array(
            CommonConfigurationPlateformePeer::FICHE_WEKA_0,
            CommonConfigurationPlateformePeer::FICHE_WEKA_1,
        ),
        CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT => array(
            CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT_0,
            CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT_1,
        ),
        CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT => array(
            CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT_0,
            CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT_1,
        ),
        CommonConfigurationPlateformePeer::LISTE_AC_RGS => array(
            CommonConfigurationPlateformePeer::LISTE_AC_RGS_0,
            CommonConfigurationPlateformePeer::LISTE_AC_RGS_1,
        ),
        CommonConfigurationPlateformePeer::LISTE_CONS_ORG => array(
            CommonConfigurationPlateformePeer::LISTE_CONS_ORG_0,
            CommonConfigurationPlateformePeer::LISTE_CONS_ORG_1,
        ),
        CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE => array(
            CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE_0,
            CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE_1,
        ),
        CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR => array(
            CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR_0,
            CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR_1,
        ),
        CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS => array(
            CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS_0,
            CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS_1,
        ),
        CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE => array(
            CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE_0,
            CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE_1,
        ),
        CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE => array(
            CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE_0,
            CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE_1,
        ),
        CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE => array(
            CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE_0,
            CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE_1,
        ),
        CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE => array(
            CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE_0,
            CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE_1,
        ),
        CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX => array(
            CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX_0,
            CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX_1,
        ),
        CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE => array(
            CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE_0,
            CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_ICE => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_ICE_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_ICE_1,
        ),
        CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI => array(
            CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI_0,
            CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI_1,
        ),
        CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV => array(
            CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV_0,
            CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV_1,
        ),
        CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR => array(
            CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR_0,
            CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE => array(
            CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE_0,
            CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE_1,
        ),
        CommonConfigurationPlateformePeer::MODULE_FACTURE => array(
            CommonConfigurationPlateformePeer::MODULE_FACTURE_0,
            CommonConfigurationPlateformePeer::MODULE_FACTURE_1,
        ),
        CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION => array(
            CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION_0,
            CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION_1,
        ),
        CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE => array(
            CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE_0,
            CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE_1,
        ),
        CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE => array(
            CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE_0,
            CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE_1,
        ),
        CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS => array(
            CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS_0,
            CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS_1,
        ),
        CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS => array(
            CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS_0,
            CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS_1,
        ),
        CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE => array(
            CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE_0,
            CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE_1,
        ),
        CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE => array(
            CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE_0,
            CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE_1,
        ),
        CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE => array(
            CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE_0,
            CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE_1,
        ),
        CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT => array(
            CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT_0,
            CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT_1,
        ),
        CommonConfigurationPlateformePeer::GENERATION_BI_CLE => array(
            CommonConfigurationPlateformePeer::GENERATION_BI_CLE_0,
            CommonConfigurationPlateformePeer::GENERATION_BI_CLE_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonConfigurationPlateformePeer::getFieldNames($toType);
        $key = isset(CommonConfigurationPlateformePeer::$fieldKeys[$fromType][$name]) ? CommonConfigurationPlateformePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonConfigurationPlateformePeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonConfigurationPlateformePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonConfigurationPlateformePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonConfigurationPlateformePeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonConfigurationPlateformePeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonConfigurationPlateformePeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonConfigurationPlateformePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonConfigurationPlateformePeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ID_AUTO);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CODE_CPV);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MULTI_LINGUISME_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_FOURNISSEURS_DOCS_MES_SOUS_SERVICES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_CERT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTICATE_INSCRIT_BY_LOGIN);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::BASE_QUALIFIEE_ENTREPRISE_INSEE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_BOAMP_MES_SOUS_SERVICES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_BI_CLE_MES_SOUS_SERVICES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::NOM_ENTREPRISE_TOUJOURS_VISIBLE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_JAL_MES_SOUS_SERVICES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CHOIX_LANGUE_AFFICHAGE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_COMPLEMENTAIRES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ANNUAIRE_ENTITES_ACHAT_VISIBLE_PAR_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_RECHERCHE_AVANCEE_AGENT_AC_SAD_TRANSVERSAUX);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENCHERES_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SOCLE_INTERNE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MODULE_CERTIFICAT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHER_IMAGE_ORGANISME);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PORTAIL_DEFENSE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PROVINCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE3);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TAX_PROF);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCVILLE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DECLARATION_HONNEUR);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_TECHNIQUES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_PRESTATIONS_REALISEES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CHIFFRE_AFFAIRE_PRODUCTION_BIENS_SERVICES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENVELOPPE_OFFRE_TECHNIQUE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CHOIX_PROFIL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PROCEDURE_ADAPTEE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_SIREN);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVATION_INSCRIPTION_PAR_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_CONSULTATIONS_EN_COURS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CAPITAL_SOCIAL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MAIL_ACTIVATION_COMPTE_INSCRIT_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_DATE_NOTIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_PMI_PME);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_NATURE_PRESTATIONS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_OBJET_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_NOTE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_FICHE_RECENSEMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_MAIL_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_INDICATEURS_CLES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_EMAIL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_TELEPHONE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AJOUT_RPA_CHAMP_FAX);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENTREPRISE_POSER_QUESTION_SANS_PJ);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::URL_DEMARCHE_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::URL_DEMARCHE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SIRET_DETAIL_ENTITE_ACHAT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PRESENCE_ELU);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GERER_MON_SERVICE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DEPOUILLEMENT_ENVELOPPE_DEPEND_RAT_ENVELOPPE_PRECEDENTE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_RETRAIS_DOSSIERS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_ADRESSE_DEPOT_OFFRES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_CAUTION_PROVISOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_LIEU_OUVERTURE_PLIS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_QUALIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_AGREMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_ECHANTILLONS_DEMANDES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_REUNION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_VISITE_DES_LIEUX);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_PRIX_ACQUISITION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RESULTAT_ANALYSE_AVANT_DECISION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CREATION_INSCRIT_PAR_ATES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_VARIANTES_AUTORISEES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_TYPE_ORG);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MENU_AGENT_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_DOMAINES_ACTIVITE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_QUALIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RECHERCHE_AVANCEE_PAR_AGREMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONTACT_ADMINISTRATIF_DANS_DETAIL_CONSULTATION_COTE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_PIECES_DOSSIERS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GERER_ADRESSES_SERVICE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TRADUIRE_ANNONCES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHER_BLOC_ACTIONS_DANS_DETAILS_ANNONCES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTORISER_UNE_SEULE_REPONSE_PRINCIPALE_PAR_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GENERATION_AVIS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PASSATION_APPLIQUER_DONNEES_ENSEMBLE_LOTS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_EXTRAIT_PV);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_RAPPORT_ACHEVEMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AJOUT_FICHIER_JOINT_AUTRE_ANNONCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_MODE_PASSATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IDENTIFIANT_UNIQUE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GERER_CERTIFICATS_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_PROGRAMME_PREVISIONNEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ANNULER_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CFE_ENTREPRISE_ACCESSIBLE_PAR_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_NACE_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CODE_NUT_LT_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::LIEUX_EXECUTION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE_LT_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES_LT_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT_LT_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_QUALIFICATION_LT_REFERENTIEL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REPONSE_PAS_A_PAS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AGENT_CONTROLE_FORMAT_MOT_DE_PASSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENTREPRISE_VALIDATION_EMAIL_INSCRIPTION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TELECHARGER_DCE_AVEC_AUTHENTIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTIFICATION_BASIC);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REGLEMENT_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ANNONCES_MARCHES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CFE_DATE_FIN_VALIDITE_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ASSOCIER_DOCUMENTS_CFE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_REGION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_TELEPHONE2);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CNSS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_RCNUM);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOMAINE_ACTIVITE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_INSCRIT_CODE_NIC);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CODE_APE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DOCUMENTS_COMMERCIAUX);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_AGREMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_MOYENS_HUMAINS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_ACTIVITE_DOMAINE_DEFENSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_DONNEES_FINANCIERES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENVELOPPE_ANONYMAT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PUBLICITE_FORMAT_XML);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ARTICLE_133_GENERATION_PF);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENTREPRISE_REPONDRE_CONSULTATION_APRES_CLOTURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TELECHARGEMENT_OUTIL_VERIF_HORODATAGE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_CODE_CPV);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_DOMAINES_ACTIVITES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::STATISTIQUES_MESURE_DEMAT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PUBLICATION_PROCURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MENU_ENTREPRISE_TOUTES_LES_CONSULTATIONS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_CP_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ANNULER_DEPOT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TRADUIRE_ENTITE_ACHAT_ARABE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TRADUIRE_ORGANISME_ARABE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_CP);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_TRANCHE_BUDGETAIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_CLASSEMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_AFFICHER_DETAIL_CANDIDAT_PAR_DEFAUT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ARTICLE_133_UPLOAD_FICHIER);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MULTI_LINGUISME_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::COMPTE_ENTREPRISE_IFU);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_ORGANISME_PAR_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::UTILISER_LUCENE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::UTILISER_PAGE_HTML_LIEUX_EXECUTION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_DATE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PRADO_VALIDATEUR_FORMAT_EMAIL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SOCLE_EXTERNE_PPP);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::VALIDATION_FORMAT_CHAMPS_STRICTE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::POSER_QUESTION_NECESSITE_AUTHENTIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTORISER_MODIF_PROFIL_INSCRIT_ATES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::UNICITE_REFERENCE_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_RCNUM_RCVILLE_OBLIGATOIRES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REGISTRE_PAPIER_ADRESSE_CP_VILLE_OBLIGATOIRES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TELECHARGER_DCE_SANS_IDENTIFICATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_ENTREPRISE_PAR_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTORISER_CARACTERES_SPECIAUX_DANS_REFERENCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::INSCRIPTION_LIBRE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHER_CODE_SERVICE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_LOGIN);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTICATE_AGENT_BY_CERT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GENERER_ACTE_DENGAGEMENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENTREPRISE_CONTROLE_FORMAT_MOT_DE_PASSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_INFORMATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CREER_AUTRE_ANNONCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_CLAUSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PANIER_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PARAMETRAGE_PUBLICITE_PAR_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::EXPORT_DECISION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::LIEU_OUVERTURE_PLIS_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::REGLE_MISE_EN_LIGNE_PAR_ENTITE_COORDINATRICE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_NEWSLETTER);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PUBLICITE_OPOCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_MODELES_FORMULAIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_ADRESSES_FACTURATION_JAL);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PUBLICITE_MARCHES_EN_LIGNE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DOSSIER_ADDITIF);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TYPE_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::TYPE_PRESTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHER_TJR_BLOC_CARACTERISTIQUE_REPONSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ALERTE_METIER);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::BOURSE_A_LA_SOUS_TRAITANCE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PUBLIER_GUIDES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::RECHERCHE_AUTO_COMPLETION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::STATUT_COMPTE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GESTION_ORGANISMES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ACCUEIL_ENTREPRISE_PERSONNALISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::INTERFACE_MODULE_SUB);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTHENTIFICATION_AGENT_MULTI_ORGANISMES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::PARTAGER_CONSULTATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ANNUAIRE_ACHETEURS_PUBLICS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ENTREPRISE_ACTIONS_GROUPEES);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::LIEUX_EXECUTION_CARTE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::SURCHARGE_REFERENTIELS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MODE_RESTRICTION_RGS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_DECISION_RESILIATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AUTRE_ANNONCE_SYNTHESE_RAPPORT_AUDIT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::FICHE_WEKA);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_AGENT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GENERATION_AUTOMATIQUE_MDP_INSCRIT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::LISTE_AC_RGS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::LISTE_CONS_ORG);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MARCHE_PUBLIC_SIMPLIFIE_ENTREPRISE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DEMANDE_VALIDATION_CONTROLEUR);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ACCES_EXEC_CONTRATS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::FORME_JURIDIQUE_GROUPEMENT_ATTRIBUTAIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DATE_LIMITE_REMISE_PLIS_OBLIGATOIRE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MODIF_TYPE_PROCEDURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DONNEES_COMPLEMENTAIRES_PROCEDURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::FORME_MARCHE_FORME_PRIX);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONTROLE_UNICITE_NUM_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_NUM_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_DATE_FIN_MARCHE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_ICE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::BLOCAGE_DEPOT_HORS_DELAI);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::ACTIVER_SUIVI_PV);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CAPTCHA_VALIDATEUR);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_DEPUIS_RESULTAT_ANALYSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MODULE_FACTURE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::VALIDATION_ENTREPRISE_FACTURATION);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SI_ENV_NON_DEPOSE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::BLOQUER_DEPOT_SIGNATURE_INVALIDE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::CONSULTATION_IMPORT_LOTS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DEPOT_SELECTION_LOTS);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::MODIFICATION_LOTS_APRES_MISE_EN_LIGNE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::FILTRE_BDF_ENTREPRISE_VALIDE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::AFFICHAGE_IDENTIFIANT_FISCALE);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::DECISION_CREER_CONTRAT);
            $criteria->addSelectColumn(CommonConfigurationPlateformePeer::GENERATION_BI_CLE);
        } else {
            $criteria->addSelectColumn($alias . '.id_auto');
            $criteria->addSelectColumn($alias . '.code_cpv');
            $criteria->addSelectColumn($alias . '.multi_linguisme_entreprise');
            $criteria->addSelectColumn($alias . '.gestion_fournisseurs_docs_mes_sous_services');
            $criteria->addSelectColumn($alias . '.authenticate_inscrit_by_cert');
            $criteria->addSelectColumn($alias . '.authenticate_inscrit_by_login');
            $criteria->addSelectColumn($alias . '.base_qualifiee_entreprise_insee');
            $criteria->addSelectColumn($alias . '.gestion_boamp_mes_sous_services');
            $criteria->addSelectColumn($alias . '.gestion_bi_cle_mes_sous_services');
            $criteria->addSelectColumn($alias . '.nom_entreprise_toujours_visible');
            $criteria->addSelectColumn($alias . '.gestion_jal_mes_sous_services');
            $criteria->addSelectColumn($alias . '.choix_langue_affichage_consultation');
            $criteria->addSelectColumn($alias . '.compte_entreprise_donnees_complementaires');
            $criteria->addSelectColumn($alias . '.annuaire_entites_achat_visible_par_entreprise');
            $criteria->addSelectColumn($alias . '.affichage_recherche_avancee_agent_ac_sad_transversaux');
            $criteria->addSelectColumn($alias . '.encheres_entreprise');
            $criteria->addSelectColumn($alias . '.socle_interne');
            $criteria->addSelectColumn($alias . '.module_certificat');
            $criteria->addSelectColumn($alias . '.socle_externe_agent');
            $criteria->addSelectColumn($alias . '.afficher_image_organisme');
            $criteria->addSelectColumn($alias . '.socle_externe_entreprise');
            $criteria->addSelectColumn($alias . '.portail_defense_entreprise');
            $criteria->addSelectColumn($alias . '.compte_entreprise_province');
            $criteria->addSelectColumn($alias . '.compte_entreprise_telephone3');
            $criteria->addSelectColumn($alias . '.compte_entreprise_tax_prof');
            $criteria->addSelectColumn($alias . '.compte_entreprise_rcville');
            $criteria->addSelectColumn($alias . '.compte_entreprise_declaration_honneur');
            $criteria->addSelectColumn($alias . '.compte_entreprise_qualification');
            $criteria->addSelectColumn($alias . '.compte_entreprise_moyens_techniques');
            $criteria->addSelectColumn($alias . '.compte_entreprise_prestations_realisees');
            $criteria->addSelectColumn($alias . '.compte_entreprise_chiffre_affaire_production_biens_services');
            $criteria->addSelectColumn($alias . '.enveloppe_offre_technique');
            $criteria->addSelectColumn($alias . '.compte_inscrit_choix_profil');
            $criteria->addSelectColumn($alias . '.procedure_adaptee');
            $criteria->addSelectColumn($alias . '.compte_entreprise_siren');
            $criteria->addSelectColumn($alias . '.compte_entreprise_activation_inscription_par_agent');
            $criteria->addSelectColumn($alias . '.menu_entreprise_consultations_en_cours');
            $criteria->addSelectColumn($alias . '.compte_entreprise_capital_social');
            $criteria->addSelectColumn($alias . '.mail_activation_compte_inscrit_entreprise');
            $criteria->addSelectColumn($alias . '.decision_date_notification');
            $criteria->addSelectColumn($alias . '.decision_pmi_pme');
            $criteria->addSelectColumn($alias . '.decision_nature_prestations');
            $criteria->addSelectColumn($alias . '.decision_objet_marche');
            $criteria->addSelectColumn($alias . '.decision_note');
            $criteria->addSelectColumn($alias . '.decision_fiche_recensement');
            $criteria->addSelectColumn($alias . '.registre_papier_mail_obligatoire');
            $criteria->addSelectColumn($alias . '.menu_entreprise_indicateurs_cles');
            $criteria->addSelectColumn($alias . '.ajout_rpa_champ_email');
            $criteria->addSelectColumn($alias . '.ajout_rpa_champ_telephone');
            $criteria->addSelectColumn($alias . '.ajout_rpa_champ_fax');
            $criteria->addSelectColumn($alias . '.entreprise_poser_question_sans_pj');
            $criteria->addSelectColumn($alias . '.url_demarche_agent');
            $criteria->addSelectColumn($alias . '.url_demarche_entreprise');
            $criteria->addSelectColumn($alias . '.siret_detail_entite_achat');
            $criteria->addSelectColumn($alias . '.presence_elu');
            $criteria->addSelectColumn($alias . '.gerer_mon_service');
            $criteria->addSelectColumn($alias . '.depouillement_enveloppe_depend_RAT_enveloppe_precedente');
            $criteria->addSelectColumn($alias . '.consultation_adresse_retrais_dossiers');
            $criteria->addSelectColumn($alias . '.consultation_adresse_depot_offres');
            $criteria->addSelectColumn($alias . '.consultation_caution_provisoire');
            $criteria->addSelectColumn($alias . '.consultation_lieu_ouverture_plis');
            $criteria->addSelectColumn($alias . '.consultation_qualification');
            $criteria->addSelectColumn($alias . '.consultation_agrement');
            $criteria->addSelectColumn($alias . '.consultation_echantillons_demandes');
            $criteria->addSelectColumn($alias . '.consultation_reunion');
            $criteria->addSelectColumn($alias . '.consultation_visite_des_lieux');
            $criteria->addSelectColumn($alias . '.consultation_prix_acquisition');
            $criteria->addSelectColumn($alias . '.resultat_analyse_avant_decision');
            $criteria->addSelectColumn($alias . '.creation_inscrit_par_ates');
            $criteria->addSelectColumn($alias . '.consultation_variantes_autorisees');
            $criteria->addSelectColumn($alias . '.recherche_avancee_par_type_org');
            $criteria->addSelectColumn($alias . '.menu_agent_societes_exclues');
            $criteria->addSelectColumn($alias . '.recherche_avancee_par_domaines_activite');
            $criteria->addSelectColumn($alias . '.recherche_avancee_par_qualification');
            $criteria->addSelectColumn($alias . '.recherche_avancee_par_agrement');
            $criteria->addSelectColumn($alias . '.contact_administratif_dans_detail_consultation_cote_entreprise');
            $criteria->addSelectColumn($alias . '.consultation_pieces_dossiers');
            $criteria->addSelectColumn($alias . '.gerer_adresses_service');
            $criteria->addSelectColumn($alias . '.traduire_annonces');
            $criteria->addSelectColumn($alias . '.afficher_bloc_actions_dans_details_annonces');
            $criteria->addSelectColumn($alias . '.autoriser_une_seule_reponse_principale_par_entreprise');
            $criteria->addSelectColumn($alias . '.generation_avis');
            $criteria->addSelectColumn($alias . '.passation_appliquer_donnees_ensemble_lots');
            $criteria->addSelectColumn($alias . '.autre_annonce_extrait_pv');
            $criteria->addSelectColumn($alias . '.autre_annonce_rapport_achevement');
            $criteria->addSelectColumn($alias . '.ajout_fichier_joint_autre_annonce');
            $criteria->addSelectColumn($alias . '.consultation_mode_passation');
            $criteria->addSelectColumn($alias . '.compte_entreprise_identifiant_unique');
            $criteria->addSelectColumn($alias . '.gerer_certificats_agent');
            $criteria->addSelectColumn($alias . '.autre_annonce_programme_previsionnel');
            $criteria->addSelectColumn($alias . '.annuler_consultation');
            $criteria->addSelectColumn($alias . '.cfe_entreprise_accessible_par_agent');
            $criteria->addSelectColumn($alias . '.compte_entreprise_code_nace_referentiel');
            $criteria->addSelectColumn($alias . '.code_nut_lt_referentiel');
            $criteria->addSelectColumn($alias . '.lieux_execution');
            $criteria->addSelectColumn($alias . '.compte_entreprise_domaine_activite_lt_referentiel');
            $criteria->addSelectColumn($alias . '.consultation_domaines_activites_lt_referentiel');
            $criteria->addSelectColumn($alias . '.compte_entreprise_agrement_lt_referentiel');
            $criteria->addSelectColumn($alias . '.compte_entreprise_qualification_lt_referentiel');
            $criteria->addSelectColumn($alias . '.reponse_pas_a_pas');
            $criteria->addSelectColumn($alias . '.agent_controle_format_mot_de_passe');
            $criteria->addSelectColumn($alias . '.entreprise_validation_email_inscription');
            $criteria->addSelectColumn($alias . '.telecharger_dce_avec_authentification');
            $criteria->addSelectColumn($alias . '.authentification_basic');
            $criteria->addSelectColumn($alias . '.reglement_consultation');
            $criteria->addSelectColumn($alias . '.annonces_marches');
            $criteria->addSelectColumn($alias . '.cfe_date_fin_validite_obligatoire');
            $criteria->addSelectColumn($alias . '.associer_documents_cfe_consultation');
            $criteria->addSelectColumn($alias . '.compte_entreprise_region');
            $criteria->addSelectColumn($alias . '.compte_entreprise_telephone2');
            $criteria->addSelectColumn($alias . '.compte_entreprise_cnss');
            $criteria->addSelectColumn($alias . '.compte_entreprise_rcnum');
            $criteria->addSelectColumn($alias . '.compte_entreprise_domaine_activite');
            $criteria->addSelectColumn($alias . '.compte_inscrit_code_nic');
            $criteria->addSelectColumn($alias . '.compte_entreprise_code_ape');
            $criteria->addSelectColumn($alias . '.compte_entreprise_documents_commerciaux');
            $criteria->addSelectColumn($alias . '.compte_entreprise_agrement');
            $criteria->addSelectColumn($alias . '.compte_entreprise_moyens_humains');
            $criteria->addSelectColumn($alias . '.compte_entreprise_activite_domaine_defense');
            $criteria->addSelectColumn($alias . '.compte_entreprise_donnees_financieres');
            $criteria->addSelectColumn($alias . '.enveloppe_anonymat');
            $criteria->addSelectColumn($alias . '.publicite_format_xml');
            $criteria->addSelectColumn($alias . '.article_133_generation_pf');
            $criteria->addSelectColumn($alias . '.entreprise_repondre_consultation_apres_cloture');
            $criteria->addSelectColumn($alias . '.telechargement_outil_verif_horodatage');
            $criteria->addSelectColumn($alias . '.affichage_code_cpv');
            $criteria->addSelectColumn($alias . '.consultation_domaines_activites');
            $criteria->addSelectColumn($alias . '.statistiques_mesure_demat');
            $criteria->addSelectColumn($alias . '.publication_procure');
            $criteria->addSelectColumn($alias . '.menu_entreprise_toutes_les_consultations');
            $criteria->addSelectColumn($alias . '.compte_entreprise_cp_obligatoire');
            $criteria->addSelectColumn($alias . '.annuler_depot');
            $criteria->addSelectColumn($alias . '.traduire_entite_achat_arabe');
            $criteria->addSelectColumn($alias . '.traduire_organisme_arabe');
            $criteria->addSelectColumn($alias . '.decision_cp');
            $criteria->addSelectColumn($alias . '.decision_tranche_budgetaire');
            $criteria->addSelectColumn($alias . '.decision_classement');
            $criteria->addSelectColumn($alias . '.decision_afficher_detail_candidat_par_defaut');
            $criteria->addSelectColumn($alias . '.article_133_upload_fichier');
            $criteria->addSelectColumn($alias . '.multi_linguisme_agent');
            $criteria->addSelectColumn($alias . '.compte_entreprise_ifu');
            $criteria->addSelectColumn($alias . '.gestion_organisme_par_agent');
            $criteria->addSelectColumn($alias . '.utiliser_lucene');
            $criteria->addSelectColumn($alias . '.utiliser_page_html_lieux_execution');
            $criteria->addSelectColumn($alias . '.prado_validateur_format_date');
            $criteria->addSelectColumn($alias . '.prado_validateur_format_email');
            $criteria->addSelectColumn($alias . '.socle_externe_ppp');
            $criteria->addSelectColumn($alias . '.validation_format_champs_stricte');
            $criteria->addSelectColumn($alias . '.poser_question_necessite_authentification');
            $criteria->addSelectColumn($alias . '.autoriser_modif_profil_inscrit_ates');
            $criteria->addSelectColumn($alias . '.unicite_reference_consultation');
            $criteria->addSelectColumn($alias . '.registre_papier_rcnum_rcville_obligatoires');
            $criteria->addSelectColumn($alias . '.registre_papier_adresse_cp_ville_obligatoires');
            $criteria->addSelectColumn($alias . '.telecharger_dce_sans_identification');
            $criteria->addSelectColumn($alias . '.gestion_entreprise_par_agent');
            $criteria->addSelectColumn($alias . '.autoriser_caracteres_speciaux_dans_reference');
            $criteria->addSelectColumn($alias . '.inscription_libre_entreprise');
            $criteria->addSelectColumn($alias . '.afficher_code_service');
            $criteria->addSelectColumn($alias . '.authenticate_agent_by_login');
            $criteria->addSelectColumn($alias . '.authenticate_agent_by_cert');
            $criteria->addSelectColumn($alias . '.generer_acte_dengagement');
            $criteria->addSelectColumn($alias . '.entreprise_controle_format_mot_de_passe');
            $criteria->addSelectColumn($alias . '.autre_annonce_information');
            $criteria->addSelectColumn($alias . '.creer_autre_annonce');
            $criteria->addSelectColumn($alias . '.consultation_clause');
            $criteria->addSelectColumn($alias . '.panier_entreprise');
            $criteria->addSelectColumn($alias . '.parametrage_publicite_par_type_procedure');
            $criteria->addSelectColumn($alias . '.export_decision');
            $criteria->addSelectColumn($alias . '.lieu_ouverture_plis_obligatoire');
            $criteria->addSelectColumn($alias . '.regle_mise_en_ligne_par_entite_coordinatrice');
            $criteria->addSelectColumn($alias . '.gestion_newsletter');
            $criteria->addSelectColumn($alias . '.publicite_opoce');
            $criteria->addSelectColumn($alias . '.gestion_modeles_formulaire');
            $criteria->addSelectColumn($alias . '.gestion_adresses_facturation_JAL');
            $criteria->addSelectColumn($alias . '.publicite_marches_en_ligne');
            $criteria->addSelectColumn($alias . '.dossier_additif');
            $criteria->addSelectColumn($alias . '.type_marche');
            $criteria->addSelectColumn($alias . '.type_prestation');
            $criteria->addSelectColumn($alias . '.afficher_tjr_bloc_caracteristique_reponse');
            $criteria->addSelectColumn($alias . '.alerte_metier');
            $criteria->addSelectColumn($alias . '.bourse_a_la_sous_traitance');
            $criteria->addSelectColumn($alias . '.publier_guides');
            $criteria->addSelectColumn($alias . '.recherche_auto_completion');
            $criteria->addSelectColumn($alias . '.statut_compte_entreprise');
            $criteria->addSelectColumn($alias . '.gestion_organismes');
            $criteria->addSelectColumn($alias . '.accueil_entreprise_personnalise');
            $criteria->addSelectColumn($alias . '.interface_module_sub');
            $criteria->addSelectColumn($alias . '.authentification_agent_multi_organismes');
            $criteria->addSelectColumn($alias . '.partager_consultation');
            $criteria->addSelectColumn($alias . '.annuaire_acheteurs_publics');
            $criteria->addSelectColumn($alias . '.entreprise_actions_groupees');
            $criteria->addSelectColumn($alias . '.lieux_execution_carte');
            $criteria->addSelectColumn($alias . '.surcharge_referentiels');
            $criteria->addSelectColumn($alias . '.Mode_Restriction_RGS');
            $criteria->addSelectColumn($alias . '.autre_annonce_decision_resiliation');
            $criteria->addSelectColumn($alias . '.autre_annonce_synthese_rapport_audit');
            $criteria->addSelectColumn($alias . '.fiche_weka');
            $criteria->addSelectColumn($alias . '.generation_automatique_mdp_agent');
            $criteria->addSelectColumn($alias . '.generation_automatique_mdp_inscrit');
            $criteria->addSelectColumn($alias . '.liste_ac_rgs');
            $criteria->addSelectColumn($alias . '.liste_cons_org');
            $criteria->addSelectColumn($alias . '.marche_public_simplifie_entreprise');
            $criteria->addSelectColumn($alias . '.demande_validation_controleur');
            $criteria->addSelectColumn($alias . '.acces_exec_contrats');
            $criteria->addSelectColumn($alias . '.forme_juridique_groupement_attributaire');
            $criteria->addSelectColumn($alias . '.date_limite_remise_plis_obligatoire');
            $criteria->addSelectColumn($alias . '.modif_type_procedure');
            $criteria->addSelectColumn($alias . '.donnees_complementaires_procedure');
            $criteria->addSelectColumn($alias . '.forme_marche_forme_prix');
            $criteria->addSelectColumn($alias . '.controle_unicite_num_marche');
            $criteria->addSelectColumn($alias . '.affichage_num_marche');
            $criteria->addSelectColumn($alias . '.affichage_date_fin_marche');
            $criteria->addSelectColumn($alias . '.affichage_ice');
            $criteria->addSelectColumn($alias . '.blocage_depot_hors_delai');
            $criteria->addSelectColumn($alias . '.activer_suivi_pv');
            $criteria->addSelectColumn($alias . '.captcha_validateur');
            $criteria->addSelectColumn($alias . '.decision_depuis_resultat_analyse');
            $criteria->addSelectColumn($alias . '.module_facture');
            $criteria->addSelectColumn($alias . '.validation_entreprise_facturation');
            $criteria->addSelectColumn($alias . '.bloquer_depot_si_env_non_depose');
            $criteria->addSelectColumn($alias . '.bloquer_depot_signature_invalide');
            $criteria->addSelectColumn($alias . '.consultation_import_lots');
            $criteria->addSelectColumn($alias . '.depot_selection_lots');
            $criteria->addSelectColumn($alias . '.modification_lots_apres_mise_en_ligne');
            $criteria->addSelectColumn($alias . '.filtre_bdf_entreprise_valide');
            $criteria->addSelectColumn($alias . '.affichage_identifiant_fiscale');
            $criteria->addSelectColumn($alias . '.decision_creer_contrat');
            $criteria->addSelectColumn($alias . '.generation_bi_cle');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonConfigurationPlateformePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonConfigurationPlateformePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonConfigurationPlateformePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonConfigurationPlateforme
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonConfigurationPlateformePeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonConfigurationPlateformePeer::populateObjects(CommonConfigurationPlateformePeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonConfigurationPlateformePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationPlateformePeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonConfigurationPlateforme $obj A CommonConfigurationPlateforme object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdAuto();
            } // if key === null
            CommonConfigurationPlateformePeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonConfigurationPlateforme object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonConfigurationPlateforme) {
                $key = (string) $value->getIdAuto();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonConfigurationPlateforme object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonConfigurationPlateformePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonConfigurationPlateforme Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonConfigurationPlateformePeer::$instances[$key])) {
                return CommonConfigurationPlateformePeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonConfigurationPlateformePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonConfigurationPlateformePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to configuration_plateforme
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonConfigurationPlateformePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonConfigurationPlateformePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonConfigurationPlateformePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonConfigurationPlateformePeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonConfigurationPlateforme object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonConfigurationPlateformePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonConfigurationPlateformePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonConfigurationPlateformePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonConfigurationPlateformePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonConfigurationPlateformePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonConfigurationPlateformePeer::DATABASE_NAME)->getTable(CommonConfigurationPlateformePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonConfigurationPlateformePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonConfigurationPlateformePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonConfigurationPlateformeTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonConfigurationPlateformePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonConfigurationPlateforme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConfigurationPlateforme object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonConfigurationPlateforme object
        }

        if ($criteria->containsKey(CommonConfigurationPlateformePeer::ID_AUTO) && $criteria->keyContainsValue(CommonConfigurationPlateformePeer::ID_AUTO) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonConfigurationPlateformePeer::ID_AUTO.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationPlateformePeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonConfigurationPlateforme or Criteria object.
     *
     * @param      mixed $values Criteria or CommonConfigurationPlateforme object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonConfigurationPlateformePeer::ID_AUTO);
            $value = $criteria->remove(CommonConfigurationPlateformePeer::ID_AUTO);
            if ($value) {
                $selectCriteria->add(CommonConfigurationPlateformePeer::ID_AUTO, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonConfigurationPlateformePeer::TABLE_NAME);
            }

        } else { // $values is CommonConfigurationPlateforme object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonConfigurationPlateformePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the configuration_plateforme table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonConfigurationPlateformePeer::TABLE_NAME, $con, CommonConfigurationPlateformePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonConfigurationPlateformePeer::clearInstancePool();
            CommonConfigurationPlateformePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonConfigurationPlateforme or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonConfigurationPlateforme object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonConfigurationPlateformePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonConfigurationPlateforme) { // it's a model object
            // invalidate the cache for this single object
            CommonConfigurationPlateformePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);
            $criteria->add(CommonConfigurationPlateformePeer::ID_AUTO, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonConfigurationPlateformePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonConfigurationPlateformePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonConfigurationPlateformePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonConfigurationPlateforme object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonConfigurationPlateforme $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonConfigurationPlateformePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonConfigurationPlateformePeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonConfigurationPlateformePeer::DATABASE_NAME, CommonConfigurationPlateformePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonConfigurationPlateforme
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonConfigurationPlateformePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);
        $criteria->add(CommonConfigurationPlateformePeer::ID_AUTO, $pk);

        $v = CommonConfigurationPlateformePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonConfigurationPlateforme[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonConfigurationPlateformePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonConfigurationPlateformePeer::DATABASE_NAME);
            $criteria->add(CommonConfigurationPlateformePeer::ID_AUTO, $pks, Criteria::IN);
            $objs = CommonConfigurationPlateformePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonConfigurationPlateformePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonConfigurationPlateformePeer::buildTableMap();

