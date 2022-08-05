<?php


/**
 * Base static class for performing query and update operations on the 'HabilitationProfil' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonHabilitationProfilPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'HabilitationProfil';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonHabilitationProfil';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonHabilitationProfilTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 163;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 163;

    /** the column name for the id field */
    const ID = 'HabilitationProfil.id';

    /** the column name for the libelle field */
    const LIBELLE = 'HabilitationProfil.libelle';

    /** the column name for the gestion_agent_pole field */
    const GESTION_AGENT_POLE = 'HabilitationProfil.gestion_agent_pole';

    /** the column name for the gestion_fournisseurs_envois_postaux field */
    const GESTION_FOURNISSEURS_ENVOIS_POSTAUX = 'HabilitationProfil.gestion_fournisseurs_envois_postaux';

    /** the column name for the gestion_bi_cles field */
    const GESTION_BI_CLES = 'HabilitationProfil.gestion_bi_cles';

    /** the column name for the creer_consultation field */
    const CREER_CONSULTATION = 'HabilitationProfil.creer_consultation';

    /** the column name for the modifier_consultation field */
    const MODIFIER_CONSULTATION = 'HabilitationProfil.modifier_consultation';

    /** the column name for the valider_consultation field */
    const VALIDER_CONSULTATION = 'HabilitationProfil.valider_consultation';

    /** the column name for the publier_consultation field */
    const PUBLIER_CONSULTATION = 'HabilitationProfil.publier_consultation';

    /** the column name for the suivre_consultation field */
    const SUIVRE_CONSULTATION = 'HabilitationProfil.suivre_consultation';

    /** the column name for the suivre_consultation_pole field */
    const SUIVRE_CONSULTATION_POLE = 'HabilitationProfil.suivre_consultation_pole';

    /** the column name for the supprimer_enveloppe field */
    const SUPPRIMER_ENVELOPPE = 'HabilitationProfil.supprimer_enveloppe';

    /** the column name for the supprimer_consultation field */
    const SUPPRIMER_CONSULTATION = 'HabilitationProfil.supprimer_consultation';

    /** the column name for the depouiller_candidature field */
    const DEPOUILLER_CANDIDATURE = 'HabilitationProfil.depouiller_candidature';

    /** the column name for the depouiller_offre field */
    const DEPOUILLER_OFFRE = 'HabilitationProfil.depouiller_offre';

    /** the column name for the messagerie_securisee field */
    const MESSAGERIE_SECURISEE = 'HabilitationProfil.messagerie_securisee';

    /** the column name for the acces_registre_depots_papier field */
    const ACCES_REGISTRE_DEPOTS_PAPIER = 'HabilitationProfil.acces_registre_depots_papier';

    /** the column name for the acces_registre_retraits_papier field */
    const ACCES_REGISTRE_RETRAITS_PAPIER = 'HabilitationProfil.acces_registre_retraits_papier';

    /** the column name for the acces_registre_questions_papier field */
    const ACCES_REGISTRE_QUESTIONS_PAPIER = 'HabilitationProfil.acces_registre_questions_papier';

    /** the column name for the gerer_encheres field */
    const GERER_ENCHERES = 'HabilitationProfil.gerer_encheres';

    /** the column name for the suivre_encheres field */
    const SUIVRE_ENCHERES = 'HabilitationProfil.suivre_encheres';

    /** the column name for the suivi_entreprise field */
    const SUIVI_ENTREPRISE = 'HabilitationProfil.suivi_entreprise';

    /** the column name for the envoi_boamp field */
    const ENVOI_BOAMP = 'HabilitationProfil.envoi_boamp';

    /** the column name for the acces_classement_lot field */
    const ACCES_CLASSEMENT_LOT = 'HabilitationProfil.acces_classement_lot';

    /** the column name for the connecteur_sis field */
    const CONNECTEUR_SIS = 'HabilitationProfil.connecteur_sis';

    /** the column name for the connecteur_marco field */
    const CONNECTEUR_MARCO = 'HabilitationProfil.connecteur_marco';

    /** the column name for the repondre_aux_questions field */
    const REPONDRE_AUX_QUESTIONS = 'HabilitationProfil.repondre_aux_questions';

    /** the column name for the appel_projet_formation field */
    const APPEL_PROJET_FORMATION = 'HabilitationProfil.appel_projet_formation';

    /** the column name for the utiliser_client_CAO field */
    const UTILISER_CLIENT_CAO = 'HabilitationProfil.utiliser_client_CAO';

    /** the column name for the notification_boamp field */
    const NOTIFICATION_BOAMP = 'HabilitationProfil.notification_boamp';

    /** the column name for the administrer_compte field */
    const ADMINISTRER_COMPTE = 'HabilitationProfil.administrer_compte';

    /** the column name for the gestion_mapa field */
    const GESTION_MAPA = 'HabilitationProfil.gestion_mapa';

    /** the column name for the gestion_type_validation field */
    const GESTION_TYPE_VALIDATION = 'HabilitationProfil.gestion_type_validation';

    /** the column name for the approuver_consultation field */
    const APPROUVER_CONSULTATION = 'HabilitationProfil.approuver_consultation';

    /** the column name for the administrer_procedure field */
    const ADMINISTRER_PROCEDURE = 'HabilitationProfil.administrer_procedure';

    /** the column name for the restreindre_creation field */
    const RESTREINDRE_CREATION = 'HabilitationProfil.restreindre_creation';

    /** the column name for the creer_liste_marches field */
    const CREER_LISTE_MARCHES = 'HabilitationProfil.creer_liste_marches';

    /** the column name for the gestion_commissions field */
    const GESTION_COMMISSIONS = 'HabilitationProfil.gestion_commissions';

    /** the column name for the suivi_seul_consultation field */
    const SUIVI_SEUL_CONSULTATION = 'HabilitationProfil.suivi_seul_consultation';

    /** the column name for the attribution_marche field */
    const ATTRIBUTION_MARCHE = 'HabilitationProfil.attribution_marche';

    /** the column name for the fiche_recensement field */
    const FICHE_RECENSEMENT = 'HabilitationProfil.fiche_recensement';

    /** the column name for the declarer_infructueux field */
    const DECLARER_INFRUCTUEUX = 'HabilitationProfil.declarer_infructueux';

    /** the column name for the declarer_sans_suite field */
    const DECLARER_SANS_SUITE = 'HabilitationProfil.declarer_sans_suite';

    /** the column name for the creer_consultation_transverse field */
    const CREER_CONSULTATION_TRANSVERSE = 'HabilitationProfil.creer_consultation_transverse';

    /** the column name for the ouvrir_candidature_en_ligne field */
    const OUVRIR_CANDIDATURE_EN_LIGNE = 'HabilitationProfil.ouvrir_candidature_en_ligne';

    /** the column name for the ouvrir_candidature_a_distance field */
    const OUVRIR_CANDIDATURE_A_DISTANCE = 'HabilitationProfil.ouvrir_candidature_a_distance';

    /** the column name for the refuser_enveloppe field */
    const REFUSER_ENVELOPPE = 'HabilitationProfil.refuser_enveloppe';

    /** the column name for the gerer_admissibilite field */
    const GERER_ADMISSIBILITE = 'HabilitationProfil.gerer_admissibilite';

    /** the column name for the restaurer_enveloppe field */
    const RESTAURER_ENVELOPPE = 'HabilitationProfil.restaurer_enveloppe';

    /** the column name for the ouvrir_offre_en_ligne field */
    const OUVRIR_OFFRE_EN_LIGNE = 'HabilitationProfil.ouvrir_offre_en_ligne';

    /** the column name for the ouvrir_anonymat_en_ligne field */
    const OUVRIR_ANONYMAT_EN_LIGNE = 'HabilitationProfil.ouvrir_anonymat_en_ligne';

    /** the column name for the gestion_compte_boamp field */
    const GESTION_COMPTE_BOAMP = 'HabilitationProfil.gestion_compte_boamp';

    /** the column name for the gestion_agents field */
    const GESTION_AGENTS = 'HabilitationProfil.gestion_agents';

    /** the column name for the gestion_habilitations field */
    const GESTION_HABILITATIONS = 'HabilitationProfil.gestion_habilitations';

    /** the column name for the gerer_mapa_inferieur_montant field */
    const GERER_MAPA_INFERIEUR_MONTANT = 'HabilitationProfil.gerer_mapa_inferieur_montant';

    /** the column name for the gerer_mapa_superieur_montant field */
    const GERER_MAPA_SUPERIEUR_MONTANT = 'HabilitationProfil.gerer_mapa_superieur_montant';

    /** the column name for the modifier_consultation_avant_validation field */
    const MODIFIER_CONSULTATION_AVANT_VALIDATION = 'HabilitationProfil.modifier_consultation_avant_validation';

    /** the column name for the modifier_consultation_apres_validation field */
    const MODIFIER_CONSULTATION_APRES_VALIDATION = 'HabilitationProfil.modifier_consultation_apres_validation';

    /** the column name for the acces_reponses field */
    const ACCES_REPONSES = 'HabilitationProfil.acces_reponses';

    /** the column name for the telechargement_groupe_anticipe_plis_chiffres field */
    const TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES = 'HabilitationProfil.telechargement_groupe_anticipe_plis_chiffres';

    /** the column name for the telechargement_unitaire_plis_chiffres field */
    const TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES = 'HabilitationProfil.telechargement_unitaire_plis_chiffres';

    /** the column name for the ouvrir_offre_a_distance field */
    const OUVRIR_OFFRE_A_DISTANCE = 'HabilitationProfil.ouvrir_offre_a_distance';

    /** the column name for the creer_annonce_information field */
    const CREER_ANNONCE_INFORMATION = 'HabilitationProfil.creer_annonce_information';

    /** the column name for the saisie_marches field */
    const SAISIE_MARCHES = 'HabilitationProfil.saisie_marches';

    /** the column name for the validation_marches field */
    const VALIDATION_MARCHES = 'HabilitationProfil.validation_marches';

    /** the column name for the publication_marches field */
    const PUBLICATION_MARCHES = 'HabilitationProfil.publication_marches';

    /** the column name for the gerer_statistiques_metier field */
    const GERER_STATISTIQUES_METIER = 'HabilitationProfil.gerer_statistiques_metier';

    /** the column name for the gerer_archives field */
    const GERER_ARCHIVES = 'HabilitationProfil.gerer_archives';

    /** the column name for the administrer_procedures_formalisees field */
    const ADMINISTRER_PROCEDURES_FORMALISEES = 'HabilitationProfil.administrer_procedures_formalisees';

    /** the column name for the creer_annonce_attribution field */
    const CREER_ANNONCE_ATTRIBUTION = 'HabilitationProfil.creer_annonce_attribution';

    /** the column name for the acces_registre_retraits_electronique field */
    const ACCES_REGISTRE_RETRAITS_ELECTRONIQUE = 'HabilitationProfil.acces_registre_retraits_electronique';

    /** the column name for the acces_registre_questions_electronique field */
    const ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE = 'HabilitationProfil.acces_registre_questions_electronique';

    /** the column name for the acces_registre_depots_electronique field */
    const ACCES_REGISTRE_DEPOTS_ELECTRONIQUE = 'HabilitationProfil.acces_registre_depots_electronique';

    /** the column name for the validation_simple field */
    const VALIDATION_SIMPLE = 'HabilitationProfil.validation_simple';

    /** the column name for the validation_intermediaire field */
    const VALIDATION_INTERMEDIAIRE = 'HabilitationProfil.validation_intermediaire';

    /** the column name for the validation_finale field */
    const VALIDATION_FINALE = 'HabilitationProfil.validation_finale';

    /** the column name for the creer_suite_consultation field */
    const CREER_SUITE_CONSULTATION = 'HabilitationProfil.creer_suite_consultation';

    /** the column name for the hyper_admin field */
    const HYPER_ADMIN = 'HabilitationProfil.hyper_admin';

    /** the column name for the droit_gestion_services field */
    const DROIT_GESTION_SERVICES = 'HabilitationProfil.droit_gestion_services';

    /** the column name for the suivi_acces field */
    const SUIVI_ACCES = 'HabilitationProfil.suivi_acces';

    /** the column name for the statistiques_site field */
    const STATISTIQUES_SITE = 'HabilitationProfil.statistiques_site';

    /** the column name for the statistiques_QoS field */
    const STATISTIQUES_QOS = 'HabilitationProfil.statistiques_QoS';

    /** the column name for the ouvrir_anonymat_a_distance field */
    const OUVRIR_ANONYMAT_A_DISTANCE = 'HabilitationProfil.ouvrir_anonymat_a_distance';

    /** the column name for the gestion_compte_jal field */
    const GESTION_COMPTE_JAL = 'HabilitationProfil.gestion_compte_jal';

    /** the column name for the gestion_centrale_pub field */
    const GESTION_CENTRALE_PUB = 'HabilitationProfil.gestion_centrale_pub';

    /** the column name for the Gestion_Compte_Groupe_Moniteur field */
    const GESTION_COMPTE_GROUPE_MONITEUR = 'HabilitationProfil.Gestion_Compte_Groupe_Moniteur';

    /** the column name for the ouvrir_offre_technique_en_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE = 'HabilitationProfil.ouvrir_offre_technique_en_ligne';

    /** the column name for the ouvrir_offre_technique_a_distance field */
    const OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE = 'HabilitationProfil.ouvrir_offre_technique_a_distance';

    /** the column name for the activation_compte_entreprise field */
    const ACTIVATION_COMPTE_ENTREPRISE = 'HabilitationProfil.activation_compte_entreprise';

    /** the column name for the importer_enveloppe field */
    const IMPORTER_ENVELOPPE = 'HabilitationProfil.importer_enveloppe';

    /** the column name for the suivi_seul_registre_depots_papier field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER = 'HabilitationProfil.suivi_seul_registre_depots_papier';

    /** the column name for the suivi_seul_registre_retraits_papier field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER = 'HabilitationProfil.suivi_seul_registre_retraits_papier';

    /** the column name for the suivi_seul_registre_questions_papier field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER = 'HabilitationProfil.suivi_seul_registre_questions_papier';

    /** the column name for the suivi_seul_registre_depots_electronique field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE = 'HabilitationProfil.suivi_seul_registre_depots_electronique';

    /** the column name for the suivi_seul_registre_retraits_electronique field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE = 'HabilitationProfil.suivi_seul_registre_retraits_electronique';

    /** the column name for the suivi_seul_registre_questions_electronique field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE = 'HabilitationProfil.suivi_seul_registre_questions_electronique';

    /** the column name for the modifier_consultation_mapa_inferieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION = 'HabilitationProfil.modifier_consultation_mapa_inferieur_montant_apres_validation';

    /** the column name for the modifier_consultation_mapa_superieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION = 'HabilitationProfil.modifier_consultation_mapa_superieur_montant_apres_validation';

    /** the column name for the modifier_consultation_procedures_formalisees_apres_validation field */
    const MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION = 'HabilitationProfil.modifier_consultation_procedures_formalisees_apres_validation';

    /** the column name for the gerer_les_entreprises field */
    const GERER_LES_ENTREPRISES = 'HabilitationProfil.gerer_les_entreprises';

    /** the column name for the portee_societes_exclues field */
    const PORTEE_SOCIETES_EXCLUES = 'HabilitationProfil.portee_societes_exclues';

    /** the column name for the portee_societes_exclues_tous_organismes field */
    const PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES = 'HabilitationProfil.portee_societes_exclues_tous_organismes';

    /** the column name for the modifier_societes_exclues field */
    const MODIFIER_SOCIETES_EXCLUES = 'HabilitationProfil.modifier_societes_exclues';

    /** the column name for the supprimer_societes_exclues field */
    const SUPPRIMER_SOCIETES_EXCLUES = 'HabilitationProfil.supprimer_societes_exclues';

    /** the column name for the resultat_analyse field */
    const RESULTAT_ANALYSE = 'HabilitationProfil.resultat_analyse';

    /** the column name for the gerer_adresses_service field */
    const GERER_ADRESSES_SERVICE = 'HabilitationProfil.gerer_adresses_service';

    /** the column name for the gerer_mon_service field */
    const GERER_MON_SERVICE = 'HabilitationProfil.gerer_mon_service';

    /** the column name for the download_archives field */
    const DOWNLOAD_ARCHIVES = 'HabilitationProfil.download_archives';

    /** the column name for the creer_annonce_extrait_pv field */
    const CREER_ANNONCE_EXTRAIT_PV = 'HabilitationProfil.creer_annonce_extrait_pv';

    /** the column name for the creer_annonce_rapport_achevement field */
    const CREER_ANNONCE_RAPPORT_ACHEVEMENT = 'HabilitationProfil.creer_annonce_rapport_achevement';

    /** the column name for the gestion_certificats_agent field */
    const GESTION_CERTIFICATS_AGENT = 'HabilitationProfil.gestion_certificats_agent';

    /** the column name for the creer_avis_programme_previsionnel field */
    const CREER_AVIS_PROGRAMME_PREVISIONNEL = 'HabilitationProfil.creer_avis_programme_previsionnel';

    /** the column name for the annuler_consultation field */
    const ANNULER_CONSULTATION = 'HabilitationProfil.annuler_consultation';

    /** the column name for the envoyer_publicite field */
    const ENVOYER_PUBLICITE = 'HabilitationProfil.envoyer_publicite';

    /** the column name for the liste_marches_notifies field */
    const LISTE_MARCHES_NOTIFIES = 'HabilitationProfil.liste_marches_notifies';

    /** the column name for the suivre_message field */
    const SUIVRE_MESSAGE = 'HabilitationProfil.suivre_message';

    /** the column name for the envoyer_message field */
    const ENVOYER_MESSAGE = 'HabilitationProfil.envoyer_message';

    /** the column name for the suivi_flux_chorus_transversal field */
    const SUIVI_FLUX_CHORUS_TRANSVERSAL = 'HabilitationProfil.suivi_flux_chorus_transversal';

    /** the column name for the gestion_mandataire field */
    const GESTION_MANDATAIRE = 'HabilitationProfil.gestion_mandataire';

    /** the column name for the gerer_newsletter field */
    const GERER_NEWSLETTER = 'HabilitationProfil.gerer_newsletter';

    /** the column name for the gestion_modeles_formulaire field */
    const GESTION_MODELES_FORMULAIRE = 'HabilitationProfil.gestion_modeles_formulaire';

    /** the column name for the gestion_adresses_facturation_jal field */
    const GESTION_ADRESSES_FACTURATION_JAL = 'HabilitationProfil.gestion_adresses_facturation_jal';

    /** the column name for the administrer_adresses_facturation_jal field */
    const ADMINISTRER_ADRESSES_FACTURATION_JAL = 'HabilitationProfil.administrer_adresses_facturation_jal';

    /** the column name for the redaction_documents_redac field */
    const REDACTION_DOCUMENTS_REDAC = 'HabilitationProfil.redaction_documents_redac';

    /** the column name for the validation_documents_redac field */
    const VALIDATION_DOCUMENTS_REDAC = 'HabilitationProfil.validation_documents_redac';

    /** the column name for the gestion_mise_disposition_pieces_marche field */
    const GESTION_MISE_DISPOSITION_PIECES_MARCHE = 'HabilitationProfil.gestion_mise_disposition_pieces_marche';

    /** the column name for the annuaire_acheteur field */
    const ANNUAIRE_ACHETEUR = 'HabilitationProfil.annuaire_acheteur';

    /** the column name for the reprendre_integralement_article field */
    const REPRENDRE_INTEGRALEMENT_ARTICLE = 'HabilitationProfil.reprendre_integralement_article';

    /** the column name for the administrer_clauses field */
    const ADMINISTRER_CLAUSES = 'HabilitationProfil.administrer_clauses';

    /** the column name for the valider_clauses field */
    const VALIDER_CLAUSES = 'HabilitationProfil.valider_clauses';

    /** the column name for the administrer_canevas field */
    const ADMINISTRER_CANEVAS = 'HabilitationProfil.administrer_canevas';

    /** the column name for the valider_canevas field */
    const VALIDER_CANEVAS = 'HabilitationProfil.valider_canevas';

    /** the column name for the administrer_clauses_entite_achats field */
    const ADMINISTRER_CLAUSES_ENTITE_ACHATS = 'HabilitationProfil.administrer_clauses_entite_achats';

    /** the column name for the generer_pieces_format_odt field */
    const GENERER_PIECES_FORMAT_ODT = 'HabilitationProfil.generer_pieces_format_odt';

    /** the column name for the publier_version_clausier_editeur field */
    const PUBLIER_VERSION_CLAUSIER_EDITEUR = 'HabilitationProfil.publier_version_clausier_editeur';

    /** the column name for the administrer_clauses_editeur field */
    const ADMINISTRER_CLAUSES_EDITEUR = 'HabilitationProfil.administrer_clauses_editeur';

    /** the column name for the valider_clauses_editeur field */
    const VALIDER_CLAUSES_EDITEUR = 'HabilitationProfil.valider_clauses_editeur';

    /** the column name for the administrer_canevas_editeur field */
    const ADMINISTRER_CANEVAS_EDITEUR = 'HabilitationProfil.administrer_canevas_editeur';

    /** the column name for the valider_canevas_editeur field */
    const VALIDER_CANEVAS_EDITEUR = 'HabilitationProfil.valider_canevas_editeur';

    /** the column name for the decision_suivi_seul field */
    const DECISION_SUIVI_SEUL = 'HabilitationProfil.decision_suivi_seul';

    /** the column name for the ouvrir_candidature_hors_ligne field */
    const OUVRIR_CANDIDATURE_HORS_LIGNE = 'HabilitationProfil.ouvrir_candidature_hors_ligne';

    /** the column name for the ouvrir_offre_hors_ligne field */
    const OUVRIR_OFFRE_HORS_LIGNE = 'HabilitationProfil.ouvrir_offre_hors_ligne';

    /** the column name for the ouvrir_offre_technique_hors_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE = 'HabilitationProfil.ouvrir_offre_technique_hors_ligne';

    /** the column name for the ouvrir_anonymat_hors_ligne field */
    const OUVRIR_ANONYMAT_HORS_LIGNE = 'HabilitationProfil.ouvrir_anonymat_hors_ligne';

    /** the column name for the espace_collaboratif_gestionnaire field */
    const ESPACE_COLLABORATIF_GESTIONNAIRE = 'HabilitationProfil.espace_collaboratif_gestionnaire';

    /** the column name for the espace_collaboratif_contributeur field */
    const ESPACE_COLLABORATIF_CONTRIBUTEUR = 'HabilitationProfil.espace_collaboratif_contributeur';

    /** the column name for the gerer_organismes field */
    const GERER_ORGANISMES = 'HabilitationProfil.gerer_organismes';

    /** the column name for the gerer_associations_agents field */
    const GERER_ASSOCIATIONS_AGENTS = 'HabilitationProfil.gerer_associations_agents';

    /** the column name for the module_redaction_uniquement field */
    const MODULE_REDACTION_UNIQUEMENT = 'HabilitationProfil.module_redaction_uniquement';

    /** the column name for the historique_navigation_inscrits field */
    const HISTORIQUE_NAVIGATION_INSCRITS = 'HabilitationProfil.historique_navigation_inscrits';

    /** the column name for the telecharger_accords_cadres field */
    const TELECHARGER_ACCORDS_CADRES = 'HabilitationProfil.telecharger_accords_cadres';

    /** the column name for the creer_annonce_decision_resiliation field */
    const CREER_ANNONCE_DECISION_RESILIATION = 'HabilitationProfil.creer_annonce_decision_resiliation';

    /** the column name for the creer_annonce_synthese_rapport_audit field */
    const CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT = 'HabilitationProfil.creer_annonce_synthese_rapport_audit';

    /** the column name for the gerer_operations field */
    const GERER_OPERATIONS = 'HabilitationProfil.gerer_operations';

    /** the column name for the telecharger_siret_acheteur field */
    const TELECHARGER_SIRET_ACHETEUR = 'HabilitationProfil.telecharger_siret_acheteur';

    /** the column name for the gerer_reouvertures_modification field */
    const GERER_REOUVERTURES_MODIFICATION = 'HabilitationProfil.gerer_reouvertures_modification';

    /** the column name for the envoyer_demande_validation field */
    const ENVOYER_DEMANDE_VALIDATION = 'HabilitationProfil.envoyer_demande_validation';

    /** the column name for the suivre_consultation_organisme field */
    const SUIVRE_CONSULTATION_ORGANISME = 'HabilitationProfil.suivre_consultation_organisme';

    /** the column name for the renseigner_montant field */
    const RENSEIGNER_MONTANT = 'HabilitationProfil.renseigner_montant';

    /** the column name for the gestion_referentiel_contact field */
    const GESTION_REFERENTIEL_CONTACT = 'HabilitationProfil.gestion_referentiel_contact';

    /** the column name for the validation_acces_facture field */
    const VALIDATION_ACCES_FACTURE = 'HabilitationProfil.validation_acces_facture';

    /** the column name for the gerer_cao field */
    const GERER_CAO = 'HabilitationProfil.gerer_cao';

    /** the column name for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO = 'HabilitationProfil.gestion_travaux_cao';

    /** The enumerated values for the gestion_agent_pole field */
    const GESTION_AGENT_POLE_0 = '0';
    const GESTION_AGENT_POLE_1 = '1';

    /** The enumerated values for the gestion_fournisseurs_envois_postaux field */
    const GESTION_FOURNISSEURS_ENVOIS_POSTAUX_0 = '0';
    const GESTION_FOURNISSEURS_ENVOIS_POSTAUX_1 = '1';

    /** The enumerated values for the gestion_bi_cles field */
    const GESTION_BI_CLES_0 = '0';
    const GESTION_BI_CLES_1 = '1';

    /** The enumerated values for the creer_consultation field */
    const CREER_CONSULTATION_0 = '0';
    const CREER_CONSULTATION_1 = '1';

    /** The enumerated values for the modifier_consultation field */
    const MODIFIER_CONSULTATION_0 = '0';
    const MODIFIER_CONSULTATION_1 = '1';

    /** The enumerated values for the valider_consultation field */
    const VALIDER_CONSULTATION_0 = '0';
    const VALIDER_CONSULTATION_1 = '1';

    /** The enumerated values for the publier_consultation field */
    const PUBLIER_CONSULTATION_0 = '0';
    const PUBLIER_CONSULTATION_1 = '1';

    /** The enumerated values for the suivre_consultation field */
    const SUIVRE_CONSULTATION_0 = '0';
    const SUIVRE_CONSULTATION_1 = '1';

    /** The enumerated values for the suivre_consultation_pole field */
    const SUIVRE_CONSULTATION_POLE_0 = '0';
    const SUIVRE_CONSULTATION_POLE_1 = '1';

    /** The enumerated values for the supprimer_enveloppe field */
    const SUPPRIMER_ENVELOPPE_0 = '0';
    const SUPPRIMER_ENVELOPPE_1 = '1';

    /** The enumerated values for the supprimer_consultation field */
    const SUPPRIMER_CONSULTATION_0 = '0';
    const SUPPRIMER_CONSULTATION_1 = '1';

    /** The enumerated values for the depouiller_candidature field */
    const DEPOUILLER_CANDIDATURE_0 = '0';
    const DEPOUILLER_CANDIDATURE_1 = '1';

    /** The enumerated values for the depouiller_offre field */
    const DEPOUILLER_OFFRE_0 = '0';
    const DEPOUILLER_OFFRE_1 = '1';

    /** The enumerated values for the messagerie_securisee field */
    const MESSAGERIE_SECURISEE_0 = '0';
    const MESSAGERIE_SECURISEE_1 = '1';

    /** The enumerated values for the acces_registre_depots_papier field */
    const ACCES_REGISTRE_DEPOTS_PAPIER_0 = '0';
    const ACCES_REGISTRE_DEPOTS_PAPIER_1 = '1';

    /** The enumerated values for the acces_registre_retraits_papier field */
    const ACCES_REGISTRE_RETRAITS_PAPIER_0 = '0';
    const ACCES_REGISTRE_RETRAITS_PAPIER_1 = '1';

    /** The enumerated values for the acces_registre_questions_papier field */
    const ACCES_REGISTRE_QUESTIONS_PAPIER_0 = '0';
    const ACCES_REGISTRE_QUESTIONS_PAPIER_1 = '1';

    /** The enumerated values for the gerer_encheres field */
    const GERER_ENCHERES_0 = '0';
    const GERER_ENCHERES_1 = '1';

    /** The enumerated values for the suivre_encheres field */
    const SUIVRE_ENCHERES_0 = '0';
    const SUIVRE_ENCHERES_1 = '1';

    /** The enumerated values for the suivi_entreprise field */
    const SUIVI_ENTREPRISE_0 = '0';
    const SUIVI_ENTREPRISE_1 = '1';

    /** The enumerated values for the envoi_boamp field */
    const ENVOI_BOAMP_0 = '0';
    const ENVOI_BOAMP_1 = '1';

    /** The enumerated values for the acces_classement_lot field */
    const ACCES_CLASSEMENT_LOT_0 = '0';
    const ACCES_CLASSEMENT_LOT_1 = '1';

    /** The enumerated values for the connecteur_sis field */
    const CONNECTEUR_SIS_0 = '0';
    const CONNECTEUR_SIS_1 = '1';

    /** The enumerated values for the connecteur_marco field */
    const CONNECTEUR_MARCO_0 = '0';
    const CONNECTEUR_MARCO_1 = '1';

    /** The enumerated values for the repondre_aux_questions field */
    const REPONDRE_AUX_QUESTIONS_0 = '0';
    const REPONDRE_AUX_QUESTIONS_1 = '1';

    /** The enumerated values for the appel_projet_formation field */
    const APPEL_PROJET_FORMATION_0 = '0';
    const APPEL_PROJET_FORMATION_1 = '1';

    /** The enumerated values for the utiliser_client_CAO field */
    const UTILISER_CLIENT_CAO_0 = '0';
    const UTILISER_CLIENT_CAO_1 = '1';

    /** The enumerated values for the notification_boamp field */
    const NOTIFICATION_BOAMP_0 = '0';
    const NOTIFICATION_BOAMP_1 = '1';

    /** The enumerated values for the administrer_compte field */
    const ADMINISTRER_COMPTE_0 = '0';
    const ADMINISTRER_COMPTE_1 = '1';

    /** The enumerated values for the gestion_mapa field */
    const GESTION_MAPA_0 = '0';
    const GESTION_MAPA_1 = '1';

    /** The enumerated values for the gestion_type_validation field */
    const GESTION_TYPE_VALIDATION_0 = '0';
    const GESTION_TYPE_VALIDATION_1 = '1';

    /** The enumerated values for the approuver_consultation field */
    const APPROUVER_CONSULTATION_0 = '0';
    const APPROUVER_CONSULTATION_1 = '1';

    /** The enumerated values for the administrer_procedure field */
    const ADMINISTRER_PROCEDURE_0 = '0';
    const ADMINISTRER_PROCEDURE_1 = '1';

    /** The enumerated values for the restreindre_creation field */
    const RESTREINDRE_CREATION_0 = '0';
    const RESTREINDRE_CREATION_1 = '1';

    /** The enumerated values for the creer_liste_marches field */
    const CREER_LISTE_MARCHES_0 = '0';
    const CREER_LISTE_MARCHES_1 = '1';

    /** The enumerated values for the gestion_commissions field */
    const GESTION_COMMISSIONS_0 = '0';
    const GESTION_COMMISSIONS_1 = '1';

    /** The enumerated values for the suivi_seul_consultation field */
    const SUIVI_SEUL_CONSULTATION_0 = '0';
    const SUIVI_SEUL_CONSULTATION_1 = '1';

    /** The enumerated values for the attribution_marche field */
    const ATTRIBUTION_MARCHE_0 = '0';
    const ATTRIBUTION_MARCHE_1 = '1';

    /** The enumerated values for the fiche_recensement field */
    const FICHE_RECENSEMENT_0 = '0';
    const FICHE_RECENSEMENT_1 = '1';

    /** The enumerated values for the declarer_infructueux field */
    const DECLARER_INFRUCTUEUX_0 = '0';
    const DECLARER_INFRUCTUEUX_1 = '1';

    /** The enumerated values for the declarer_sans_suite field */
    const DECLARER_SANS_SUITE_0 = '0';
    const DECLARER_SANS_SUITE_1 = '1';

    /** The enumerated values for the creer_consultation_transverse field */
    const CREER_CONSULTATION_TRANSVERSE_0 = '0';
    const CREER_CONSULTATION_TRANSVERSE_1 = '1';

    /** The enumerated values for the ouvrir_candidature_en_ligne field */
    const OUVRIR_CANDIDATURE_EN_LIGNE_0 = '0';
    const OUVRIR_CANDIDATURE_EN_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_candidature_a_distance field */
    const OUVRIR_CANDIDATURE_A_DISTANCE_0 = '0';
    const OUVRIR_CANDIDATURE_A_DISTANCE_1 = '1';

    /** The enumerated values for the refuser_enveloppe field */
    const REFUSER_ENVELOPPE_0 = '0';
    const REFUSER_ENVELOPPE_1 = '1';

    /** The enumerated values for the gerer_admissibilite field */
    const GERER_ADMISSIBILITE_0 = '0';
    const GERER_ADMISSIBILITE_1 = '1';

    /** The enumerated values for the restaurer_enveloppe field */
    const RESTAURER_ENVELOPPE_0 = '0';
    const RESTAURER_ENVELOPPE_1 = '1';

    /** The enumerated values for the ouvrir_offre_en_ligne field */
    const OUVRIR_OFFRE_EN_LIGNE_0 = '0';
    const OUVRIR_OFFRE_EN_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_anonymat_en_ligne field */
    const OUVRIR_ANONYMAT_EN_LIGNE_0 = '0';
    const OUVRIR_ANONYMAT_EN_LIGNE_1 = '1';

    /** The enumerated values for the gestion_compte_boamp field */
    const GESTION_COMPTE_BOAMP_0 = '0';
    const GESTION_COMPTE_BOAMP_1 = '1';

    /** The enumerated values for the gestion_agents field */
    const GESTION_AGENTS_0 = '0';
    const GESTION_AGENTS_1 = '1';

    /** The enumerated values for the gestion_habilitations field */
    const GESTION_HABILITATIONS_0 = '0';
    const GESTION_HABILITATIONS_1 = '1';

    /** The enumerated values for the gerer_mapa_inferieur_montant field */
    const GERER_MAPA_INFERIEUR_MONTANT_0 = '0';
    const GERER_MAPA_INFERIEUR_MONTANT_1 = '1';

    /** The enumerated values for the gerer_mapa_superieur_montant field */
    const GERER_MAPA_SUPERIEUR_MONTANT_0 = '0';
    const GERER_MAPA_SUPERIEUR_MONTANT_1 = '1';

    /** The enumerated values for the modifier_consultation_avant_validation field */
    const MODIFIER_CONSULTATION_AVANT_VALIDATION_0 = '0';
    const MODIFIER_CONSULTATION_AVANT_VALIDATION_1 = '1';

    /** The enumerated values for the modifier_consultation_apres_validation field */
    const MODIFIER_CONSULTATION_APRES_VALIDATION_0 = '0';
    const MODIFIER_CONSULTATION_APRES_VALIDATION_1 = '1';

    /** The enumerated values for the acces_reponses field */
    const ACCES_REPONSES_0 = '0';
    const ACCES_REPONSES_1 = '1';

    /** The enumerated values for the telechargement_groupe_anticipe_plis_chiffres field */
    const TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_0 = '0';
    const TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_1 = '1';

    /** The enumerated values for the telechargement_unitaire_plis_chiffres field */
    const TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_0 = '0';
    const TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_1 = '1';

    /** The enumerated values for the ouvrir_offre_a_distance field */
    const OUVRIR_OFFRE_A_DISTANCE_0 = '0';
    const OUVRIR_OFFRE_A_DISTANCE_1 = '1';

    /** The enumerated values for the creer_annonce_information field */
    const CREER_ANNONCE_INFORMATION_0 = '0';
    const CREER_ANNONCE_INFORMATION_1 = '1';

    /** The enumerated values for the saisie_marches field */
    const SAISIE_MARCHES_0 = '0';
    const SAISIE_MARCHES_1 = '1';

    /** The enumerated values for the validation_marches field */
    const VALIDATION_MARCHES_0 = '0';
    const VALIDATION_MARCHES_1 = '1';

    /** The enumerated values for the publication_marches field */
    const PUBLICATION_MARCHES_0 = '0';
    const PUBLICATION_MARCHES_1 = '1';

    /** The enumerated values for the gerer_statistiques_metier field */
    const GERER_STATISTIQUES_METIER_0 = '0';
    const GERER_STATISTIQUES_METIER_1 = '1';

    /** The enumerated values for the gerer_archives field */
    const GERER_ARCHIVES_0 = '0';
    const GERER_ARCHIVES_1 = '1';

    /** The enumerated values for the administrer_procedures_formalisees field */
    const ADMINISTRER_PROCEDURES_FORMALISEES_0 = '0';
    const ADMINISTRER_PROCEDURES_FORMALISEES_1 = '1';

    /** The enumerated values for the creer_annonce_attribution field */
    const CREER_ANNONCE_ATTRIBUTION_0 = '0';
    const CREER_ANNONCE_ATTRIBUTION_1 = '1';

    /** The enumerated values for the acces_registre_retraits_electronique field */
    const ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_0 = '0';
    const ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the acces_registre_questions_electronique field */
    const ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_0 = '0';
    const ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the acces_registre_depots_electronique field */
    const ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_0 = '0';
    const ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the validation_simple field */
    const VALIDATION_SIMPLE_0 = '0';
    const VALIDATION_SIMPLE_1 = '1';

    /** The enumerated values for the validation_intermediaire field */
    const VALIDATION_INTERMEDIAIRE_0 = '0';
    const VALIDATION_INTERMEDIAIRE_1 = '1';

    /** The enumerated values for the validation_finale field */
    const VALIDATION_FINALE_0 = '0';
    const VALIDATION_FINALE_1 = '1';

    /** The enumerated values for the creer_suite_consultation field */
    const CREER_SUITE_CONSULTATION_0 = '0';
    const CREER_SUITE_CONSULTATION_1 = '1';

    /** The enumerated values for the hyper_admin field */
    const HYPER_ADMIN_0 = '0';
    const HYPER_ADMIN_1 = '1';

    /** The enumerated values for the droit_gestion_services field */
    const DROIT_GESTION_SERVICES_0 = '0';
    const DROIT_GESTION_SERVICES_1 = '1';

    /** The enumerated values for the suivi_acces field */
    const SUIVI_ACCES_0 = '0';
    const SUIVI_ACCES_1 = '1';

    /** The enumerated values for the statistiques_site field */
    const STATISTIQUES_SITE_0 = '0';
    const STATISTIQUES_SITE_1 = '1';

    /** The enumerated values for the statistiques_QoS field */
    const STATISTIQUES_QOS_0 = '0';
    const STATISTIQUES_QOS_1 = '1';

    /** The enumerated values for the ouvrir_anonymat_a_distance field */
    const OUVRIR_ANONYMAT_A_DISTANCE_0 = '0';
    const OUVRIR_ANONYMAT_A_DISTANCE_1 = '1';

    /** The enumerated values for the gestion_compte_jal field */
    const GESTION_COMPTE_JAL_0 = '0';
    const GESTION_COMPTE_JAL_1 = '1';

    /** The enumerated values for the gestion_centrale_pub field */
    const GESTION_CENTRALE_PUB_0 = '0';
    const GESTION_CENTRALE_PUB_1 = '1';

    /** The enumerated values for the Gestion_Compte_Groupe_Moniteur field */
    const GESTION_COMPTE_GROUPE_MONITEUR_0 = '0';
    const GESTION_COMPTE_GROUPE_MONITEUR_1 = '1';

    /** The enumerated values for the ouvrir_offre_technique_en_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_0 = '0';
    const OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_offre_technique_a_distance field */
    const OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_0 = '0';
    const OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_1 = '1';

    /** The enumerated values for the activation_compte_entreprise field */
    const ACTIVATION_COMPTE_ENTREPRISE_0 = '0';
    const ACTIVATION_COMPTE_ENTREPRISE_1 = '1';

    /** The enumerated values for the importer_enveloppe field */
    const IMPORTER_ENVELOPPE_0 = '0';
    const IMPORTER_ENVELOPPE_1 = '1';

    /** The enumerated values for the suivi_seul_registre_depots_papier field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_0 = '0';
    const SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_1 = '1';

    /** The enumerated values for the suivi_seul_registre_retraits_papier field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_0 = '0';
    const SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_1 = '1';

    /** The enumerated values for the suivi_seul_registre_questions_papier field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_0 = '0';
    const SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_1 = '1';

    /** The enumerated values for the suivi_seul_registre_depots_electronique field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_0 = '0';
    const SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the suivi_seul_registre_retraits_electronique field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_0 = '0';
    const SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the suivi_seul_registre_questions_electronique field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_0 = '0';
    const SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_1 = '1';

    /** The enumerated values for the modifier_consultation_mapa_inferieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_0 = '0';
    const MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_1 = '1';

    /** The enumerated values for the modifier_consultation_mapa_superieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_0 = '0';
    const MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_1 = '1';

    /** The enumerated values for the modifier_consultation_procedures_formalisees_apres_validation field */
    const MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_0 = '0';
    const MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_1 = '1';

    /** The enumerated values for the gerer_les_entreprises field */
    const GERER_LES_ENTREPRISES_0 = '0';
    const GERER_LES_ENTREPRISES_1 = '1';

    /** The enumerated values for the portee_societes_exclues field */
    const PORTEE_SOCIETES_EXCLUES_0 = '0';
    const PORTEE_SOCIETES_EXCLUES_1 = '1';

    /** The enumerated values for the portee_societes_exclues_tous_organismes field */
    const PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_0 = '0';
    const PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_1 = '1';

    /** The enumerated values for the modifier_societes_exclues field */
    const MODIFIER_SOCIETES_EXCLUES_0 = '0';
    const MODIFIER_SOCIETES_EXCLUES_1 = '1';

    /** The enumerated values for the supprimer_societes_exclues field */
    const SUPPRIMER_SOCIETES_EXCLUES_0 = '0';
    const SUPPRIMER_SOCIETES_EXCLUES_1 = '1';

    /** The enumerated values for the resultat_analyse field */
    const RESULTAT_ANALYSE_0 = '0';
    const RESULTAT_ANALYSE_1 = '1';

    /** The enumerated values for the gerer_adresses_service field */
    const GERER_ADRESSES_SERVICE_0 = '0';
    const GERER_ADRESSES_SERVICE_1 = '1';

    /** The enumerated values for the gerer_mon_service field */
    const GERER_MON_SERVICE_0 = '0';
    const GERER_MON_SERVICE_1 = '1';

    /** The enumerated values for the download_archives field */
    const DOWNLOAD_ARCHIVES_0 = '0';
    const DOWNLOAD_ARCHIVES_1 = '1';

    /** The enumerated values for the creer_annonce_extrait_pv field */
    const CREER_ANNONCE_EXTRAIT_PV_0 = '0';
    const CREER_ANNONCE_EXTRAIT_PV_1 = '1';

    /** The enumerated values for the creer_annonce_rapport_achevement field */
    const CREER_ANNONCE_RAPPORT_ACHEVEMENT_0 = '0';
    const CREER_ANNONCE_RAPPORT_ACHEVEMENT_1 = '1';

    /** The enumerated values for the gestion_certificats_agent field */
    const GESTION_CERTIFICATS_AGENT_0 = '0';
    const GESTION_CERTIFICATS_AGENT_1 = '1';

    /** The enumerated values for the creer_avis_programme_previsionnel field */
    const CREER_AVIS_PROGRAMME_PREVISIONNEL_0 = '0';
    const CREER_AVIS_PROGRAMME_PREVISIONNEL_1 = '1';

    /** The enumerated values for the annuler_consultation field */
    const ANNULER_CONSULTATION_0 = '0';
    const ANNULER_CONSULTATION_1 = '1';

    /** The enumerated values for the envoyer_publicite field */
    const ENVOYER_PUBLICITE_0 = '0';
    const ENVOYER_PUBLICITE_1 = '1';

    /** The enumerated values for the liste_marches_notifies field */
    const LISTE_MARCHES_NOTIFIES_0 = '0';
    const LISTE_MARCHES_NOTIFIES_1 = '1';

    /** The enumerated values for the suivre_message field */
    const SUIVRE_MESSAGE_0 = '0';
    const SUIVRE_MESSAGE_1 = '1';

    /** The enumerated values for the envoyer_message field */
    const ENVOYER_MESSAGE_0 = '0';
    const ENVOYER_MESSAGE_1 = '1';

    /** The enumerated values for the suivi_flux_chorus_transversal field */
    const SUIVI_FLUX_CHORUS_TRANSVERSAL_0 = '0';
    const SUIVI_FLUX_CHORUS_TRANSVERSAL_1 = '1';

    /** The enumerated values for the gestion_mandataire field */
    const GESTION_MANDATAIRE_0 = '0';
    const GESTION_MANDATAIRE_1 = '1';

    /** The enumerated values for the gerer_newsletter field */
    const GERER_NEWSLETTER_0 = '0';
    const GERER_NEWSLETTER_1 = '1';

    /** The enumerated values for the gestion_modeles_formulaire field */
    const GESTION_MODELES_FORMULAIRE_0 = '0';
    const GESTION_MODELES_FORMULAIRE_1 = '1';

    /** The enumerated values for the gestion_adresses_facturation_jal field */
    const GESTION_ADRESSES_FACTURATION_JAL_0 = '0';
    const GESTION_ADRESSES_FACTURATION_JAL_1 = '1';

    /** The enumerated values for the administrer_adresses_facturation_jal field */
    const ADMINISTRER_ADRESSES_FACTURATION_JAL_0 = '0';
    const ADMINISTRER_ADRESSES_FACTURATION_JAL_1 = '1';

    /** The enumerated values for the redaction_documents_redac field */
    const REDACTION_DOCUMENTS_REDAC_0 = '0';
    const REDACTION_DOCUMENTS_REDAC_1 = '1';

    /** The enumerated values for the validation_documents_redac field */
    const VALIDATION_DOCUMENTS_REDAC_0 = '0';
    const VALIDATION_DOCUMENTS_REDAC_1 = '1';

    /** The enumerated values for the gestion_mise_disposition_pieces_marche field */
    const GESTION_MISE_DISPOSITION_PIECES_MARCHE_0 = '0';
    const GESTION_MISE_DISPOSITION_PIECES_MARCHE_1 = '1';

    /** The enumerated values for the annuaire_acheteur field */
    const ANNUAIRE_ACHETEUR_0 = '0';
    const ANNUAIRE_ACHETEUR_1 = '1';

    /** The enumerated values for the reprendre_integralement_article field */
    const REPRENDRE_INTEGRALEMENT_ARTICLE_0 = '0';
    const REPRENDRE_INTEGRALEMENT_ARTICLE_1 = '1';

    /** The enumerated values for the administrer_clauses field */
    const ADMINISTRER_CLAUSES_0 = '0';
    const ADMINISTRER_CLAUSES_1 = '1';

    /** The enumerated values for the valider_clauses field */
    const VALIDER_CLAUSES_0 = '0';
    const VALIDER_CLAUSES_1 = '1';

    /** The enumerated values for the administrer_canevas field */
    const ADMINISTRER_CANEVAS_0 = '0';
    const ADMINISTRER_CANEVAS_1 = '1';

    /** The enumerated values for the valider_canevas field */
    const VALIDER_CANEVAS_0 = '0';
    const VALIDER_CANEVAS_1 = '1';

    /** The enumerated values for the administrer_clauses_entite_achats field */
    const ADMINISTRER_CLAUSES_ENTITE_ACHATS_0 = '0';
    const ADMINISTRER_CLAUSES_ENTITE_ACHATS_1 = '1';

    /** The enumerated values for the generer_pieces_format_odt field */
    const GENERER_PIECES_FORMAT_ODT_0 = '0';
    const GENERER_PIECES_FORMAT_ODT_1 = '1';

    /** The enumerated values for the publier_version_clausier_editeur field */
    const PUBLIER_VERSION_CLAUSIER_EDITEUR_0 = '0';
    const PUBLIER_VERSION_CLAUSIER_EDITEUR_1 = '1';

    /** The enumerated values for the administrer_clauses_editeur field */
    const ADMINISTRER_CLAUSES_EDITEUR_0 = '0';
    const ADMINISTRER_CLAUSES_EDITEUR_1 = '1';

    /** The enumerated values for the valider_clauses_editeur field */
    const VALIDER_CLAUSES_EDITEUR_0 = '0';
    const VALIDER_CLAUSES_EDITEUR_1 = '1';

    /** The enumerated values for the administrer_canevas_editeur field */
    const ADMINISTRER_CANEVAS_EDITEUR_0 = '0';
    const ADMINISTRER_CANEVAS_EDITEUR_1 = '1';

    /** The enumerated values for the valider_canevas_editeur field */
    const VALIDER_CANEVAS_EDITEUR_0 = '0';
    const VALIDER_CANEVAS_EDITEUR_1 = '1';

    /** The enumerated values for the decision_suivi_seul field */
    const DECISION_SUIVI_SEUL_0 = '0';
    const DECISION_SUIVI_SEUL_1 = '1';

    /** The enumerated values for the ouvrir_candidature_hors_ligne field */
    const OUVRIR_CANDIDATURE_HORS_LIGNE_0 = '0';
    const OUVRIR_CANDIDATURE_HORS_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_offre_hors_ligne field */
    const OUVRIR_OFFRE_HORS_LIGNE_0 = '0';
    const OUVRIR_OFFRE_HORS_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_offre_technique_hors_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_0 = '0';
    const OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_anonymat_hors_ligne field */
    const OUVRIR_ANONYMAT_HORS_LIGNE_0 = '0';
    const OUVRIR_ANONYMAT_HORS_LIGNE_1 = '1';

    /** The enumerated values for the espace_collaboratif_gestionnaire field */
    const ESPACE_COLLABORATIF_GESTIONNAIRE_0 = '0';
    const ESPACE_COLLABORATIF_GESTIONNAIRE_1 = '1';

    /** The enumerated values for the espace_collaboratif_contributeur field */
    const ESPACE_COLLABORATIF_CONTRIBUTEUR_0 = '0';
    const ESPACE_COLLABORATIF_CONTRIBUTEUR_1 = '1';

    /** The enumerated values for the gerer_organismes field */
    const GERER_ORGANISMES_0 = '0';
    const GERER_ORGANISMES_1 = '1';

    /** The enumerated values for the gerer_associations_agents field */
    const GERER_ASSOCIATIONS_AGENTS_0 = '0';
    const GERER_ASSOCIATIONS_AGENTS_1 = '1';

    /** The enumerated values for the module_redaction_uniquement field */
    const MODULE_REDACTION_UNIQUEMENT_0 = '0';
    const MODULE_REDACTION_UNIQUEMENT_1 = '1';

    /** The enumerated values for the historique_navigation_inscrits field */
    const HISTORIQUE_NAVIGATION_INSCRITS_0 = '0';
    const HISTORIQUE_NAVIGATION_INSCRITS_1 = '1';

    /** The enumerated values for the telecharger_accords_cadres field */
    const TELECHARGER_ACCORDS_CADRES_0 = '0';
    const TELECHARGER_ACCORDS_CADRES_1 = '1';

    /** The enumerated values for the creer_annonce_decision_resiliation field */
    const CREER_ANNONCE_DECISION_RESILIATION_0 = '0';
    const CREER_ANNONCE_DECISION_RESILIATION_1 = '1';

    /** The enumerated values for the creer_annonce_synthese_rapport_audit field */
    const CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_0 = '0';
    const CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_1 = '1';

    /** The enumerated values for the gerer_operations field */
    const GERER_OPERATIONS_0 = '0';
    const GERER_OPERATIONS_1 = '1';

    /** The enumerated values for the telecharger_siret_acheteur field */
    const TELECHARGER_SIRET_ACHETEUR_0 = '0';
    const TELECHARGER_SIRET_ACHETEUR_1 = '1';

    /** The enumerated values for the gerer_reouvertures_modification field */
    const GERER_REOUVERTURES_MODIFICATION_0 = '0';
    const GERER_REOUVERTURES_MODIFICATION_1 = '1';

    /** The enumerated values for the envoyer_demande_validation field */
    const ENVOYER_DEMANDE_VALIDATION_0 = '0';
    const ENVOYER_DEMANDE_VALIDATION_1 = '1';

    /** The enumerated values for the suivre_consultation_organisme field */
    const SUIVRE_CONSULTATION_ORGANISME_0 = '0';
    const SUIVRE_CONSULTATION_ORGANISME_1 = '1';

    /** The enumerated values for the renseigner_montant field */
    const RENSEIGNER_MONTANT_0 = '0';
    const RENSEIGNER_MONTANT_1 = '1';

    /** The enumerated values for the gestion_referentiel_contact field */
    const GESTION_REFERENTIEL_CONTACT_0 = '0';
    const GESTION_REFERENTIEL_CONTACT_1 = '1';

    /** The enumerated values for the validation_acces_facture field */
    const VALIDATION_ACCES_FACTURE_0 = '0';
    const VALIDATION_ACCES_FACTURE_1 = '1';

    /** The enumerated values for the gerer_cao field */
    const GERER_CAO_0 = '0';
    const GERER_CAO_1 = '1';

    /** The enumerated values for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO_0 = '0';
    const GESTION_TRAVAUX_CAO_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonHabilitationProfil objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonHabilitationProfil[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonHabilitationProfilPeer::$fieldNames[CommonHabilitationProfilPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Libelle', 'GestionAgentPole', 'GestionFournisseursEnvoisPostaux', 'GestionBiCles', 'CreerConsultation', 'ModifierConsultation', 'ValiderConsultation', 'PublierConsultation', 'SuivreConsultation', 'SuivreConsultationPole', 'SupprimerEnveloppe', 'SupprimerConsultation', 'DepouillerCandidature', 'DepouillerOffre', 'MessagerieSecurisee', 'AccesRegistreDepotsPapier', 'AccesRegistreRetraitsPapier', 'AccesRegistreQuestionsPapier', 'GererEncheres', 'SuivreEncheres', 'SuiviEntreprise', 'EnvoiBoamp', 'AccesClassementLot', 'ConnecteurSis', 'ConnecteurMarco', 'RepondreAuxQuestions', 'AppelProjetFormation', 'UtiliserClientCao', 'NotificationBoamp', 'AdministrerCompte', 'GestionMapa', 'GestionTypeValidation', 'ApprouverConsultation', 'AdministrerProcedure', 'RestreindreCreation', 'CreerListeMarches', 'GestionCommissions', 'SuiviSeulConsultation', 'AttributionMarche', 'FicheRecensement', 'DeclarerInfructueux', 'DeclarerSansSuite', 'CreerConsultationTransverse', 'OuvrirCandidatureEnLigne', 'OuvrirCandidatureADistance', 'RefuserEnveloppe', 'GererAdmissibilite', 'RestaurerEnveloppe', 'OuvrirOffreEnLigne', 'OuvrirAnonymatEnLigne', 'GestionCompteBoamp', 'GestionAgents', 'GestionHabilitations', 'GererMapaInferieurMontant', 'GererMapaSuperieurMontant', 'ModifierConsultationAvantValidation', 'ModifierConsultationApresValidation', 'AccesReponses', 'TelechargementGroupeAnticipePlisChiffres', 'TelechargementUnitairePlisChiffres', 'OuvrirOffreADistance', 'CreerAnnonceInformation', 'SaisieMarches', 'ValidationMarches', 'PublicationMarches', 'GererStatistiquesMetier', 'GererArchives', 'AdministrerProceduresFormalisees', 'CreerAnnonceAttribution', 'AccesRegistreRetraitsElectronique', 'AccesRegistreQuestionsElectronique', 'AccesRegistreDepotsElectronique', 'ValidationSimple', 'ValidationIntermediaire', 'ValidationFinale', 'CreerSuiteConsultation', 'HyperAdmin', 'DroitGestionServices', 'SuiviAcces', 'StatistiquesSite', 'StatistiquesQos', 'OuvrirAnonymatADistance', 'GestionCompteJal', 'GestionCentralePub', 'GestionCompteGroupeMoniteur', 'OuvrirOffreTechniqueEnLigne', 'OuvrirOffreTechniqueADistance', 'ActivationCompteEntreprise', 'ImporterEnveloppe', 'SuiviSeulRegistreDepotsPapier', 'SuiviSeulRegistreRetraitsPapier', 'SuiviSeulRegistreQuestionsPapier', 'SuiviSeulRegistreDepotsElectronique', 'SuiviSeulRegistreRetraitsElectronique', 'SuiviSeulRegistreQuestionsElectronique', 'ModifierConsultationMapaInferieurMontantApresValidation', 'ModifierConsultationMapaSuperieurMontantApresValidation', 'ModifierConsultationProceduresFormaliseesApresValidation', 'GererLesEntreprises', 'PorteeSocietesExclues', 'PorteeSocietesExcluesTousOrganismes', 'ModifierSocietesExclues', 'SupprimerSocietesExclues', 'ResultatAnalyse', 'GererAdressesService', 'GererMonService', 'DownloadArchives', 'CreerAnnonceExtraitPv', 'CreerAnnonceRapportAchevement', 'GestionCertificatsAgent', 'CreerAvisProgrammePrevisionnel', 'AnnulerConsultation', 'EnvoyerPublicite', 'ListeMarchesNotifies', 'SuivreMessage', 'EnvoyerMessage', 'SuiviFluxChorusTransversal', 'GestionMandataire', 'GererNewsletter', 'GestionModelesFormulaire', 'GestionAdressesFacturationJal', 'AdministrerAdressesFacturationJal', 'RedactionDocumentsRedac', 'ValidationDocumentsRedac', 'GestionMiseDispositionPiecesMarche', 'AnnuaireAcheteur', 'ReprendreIntegralementArticle', 'AdministrerClauses', 'ValiderClauses', 'AdministrerCanevas', 'ValiderCanevas', 'AdministrerClausesEntiteAchats', 'GenererPiecesFormatOdt', 'PublierVersionClausierEditeur', 'AdministrerClausesEditeur', 'ValiderClausesEditeur', 'AdministrerCanevasEditeur', 'ValiderCanevasEditeur', 'DecisionSuiviSeul', 'OuvrirCandidatureHorsLigne', 'OuvrirOffreHorsLigne', 'OuvrirOffreTechniqueHorsLigne', 'OuvrirAnonymatHorsLigne', 'EspaceCollaboratifGestionnaire', 'EspaceCollaboratifContributeur', 'GererOrganismes', 'GererAssociationsAgents', 'ModuleRedactionUniquement', 'HistoriqueNavigationInscrits', 'TelechargerAccordsCadres', 'CreerAnnonceDecisionResiliation', 'CreerAnnonceSyntheseRapportAudit', 'GererOperations', 'TelechargerSiretAcheteur', 'GererReouverturesModification', 'EnvoyerDemandeValidation', 'SuivreConsultationOrganisme', 'RenseignerMontant', 'GestionReferentielContact', 'ValidationAccesFacture', 'GererCao', 'GestionTravauxCao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'libelle', 'gestionAgentPole', 'gestionFournisseursEnvoisPostaux', 'gestionBiCles', 'creerConsultation', 'modifierConsultation', 'validerConsultation', 'publierConsultation', 'suivreConsultation', 'suivreConsultationPole', 'supprimerEnveloppe', 'supprimerConsultation', 'depouillerCandidature', 'depouillerOffre', 'messagerieSecurisee', 'accesRegistreDepotsPapier', 'accesRegistreRetraitsPapier', 'accesRegistreQuestionsPapier', 'gererEncheres', 'suivreEncheres', 'suiviEntreprise', 'envoiBoamp', 'accesClassementLot', 'connecteurSis', 'connecteurMarco', 'repondreAuxQuestions', 'appelProjetFormation', 'utiliserClientCao', 'notificationBoamp', 'administrerCompte', 'gestionMapa', 'gestionTypeValidation', 'approuverConsultation', 'administrerProcedure', 'restreindreCreation', 'creerListeMarches', 'gestionCommissions', 'suiviSeulConsultation', 'attributionMarche', 'ficheRecensement', 'declarerInfructueux', 'declarerSansSuite', 'creerConsultationTransverse', 'ouvrirCandidatureEnLigne', 'ouvrirCandidatureADistance', 'refuserEnveloppe', 'gererAdmissibilite', 'restaurerEnveloppe', 'ouvrirOffreEnLigne', 'ouvrirAnonymatEnLigne', 'gestionCompteBoamp', 'gestionAgents', 'gestionHabilitations', 'gererMapaInferieurMontant', 'gererMapaSuperieurMontant', 'modifierConsultationAvantValidation', 'modifierConsultationApresValidation', 'accesReponses', 'telechargementGroupeAnticipePlisChiffres', 'telechargementUnitairePlisChiffres', 'ouvrirOffreADistance', 'creerAnnonceInformation', 'saisieMarches', 'validationMarches', 'publicationMarches', 'gererStatistiquesMetier', 'gererArchives', 'administrerProceduresFormalisees', 'creerAnnonceAttribution', 'accesRegistreRetraitsElectronique', 'accesRegistreQuestionsElectronique', 'accesRegistreDepotsElectronique', 'validationSimple', 'validationIntermediaire', 'validationFinale', 'creerSuiteConsultation', 'hyperAdmin', 'droitGestionServices', 'suiviAcces', 'statistiquesSite', 'statistiquesQos', 'ouvrirAnonymatADistance', 'gestionCompteJal', 'gestionCentralePub', 'gestionCompteGroupeMoniteur', 'ouvrirOffreTechniqueEnLigne', 'ouvrirOffreTechniqueADistance', 'activationCompteEntreprise', 'importerEnveloppe', 'suiviSeulRegistreDepotsPapier', 'suiviSeulRegistreRetraitsPapier', 'suiviSeulRegistreQuestionsPapier', 'suiviSeulRegistreDepotsElectronique', 'suiviSeulRegistreRetraitsElectronique', 'suiviSeulRegistreQuestionsElectronique', 'modifierConsultationMapaInferieurMontantApresValidation', 'modifierConsultationMapaSuperieurMontantApresValidation', 'modifierConsultationProceduresFormaliseesApresValidation', 'gererLesEntreprises', 'porteeSocietesExclues', 'porteeSocietesExcluesTousOrganismes', 'modifierSocietesExclues', 'supprimerSocietesExclues', 'resultatAnalyse', 'gererAdressesService', 'gererMonService', 'downloadArchives', 'creerAnnonceExtraitPv', 'creerAnnonceRapportAchevement', 'gestionCertificatsAgent', 'creerAvisProgrammePrevisionnel', 'annulerConsultation', 'envoyerPublicite', 'listeMarchesNotifies', 'suivreMessage', 'envoyerMessage', 'suiviFluxChorusTransversal', 'gestionMandataire', 'gererNewsletter', 'gestionModelesFormulaire', 'gestionAdressesFacturationJal', 'administrerAdressesFacturationJal', 'redactionDocumentsRedac', 'validationDocumentsRedac', 'gestionMiseDispositionPiecesMarche', 'annuaireAcheteur', 'reprendreIntegralementArticle', 'administrerClauses', 'validerClauses', 'administrerCanevas', 'validerCanevas', 'administrerClausesEntiteAchats', 'genererPiecesFormatOdt', 'publierVersionClausierEditeur', 'administrerClausesEditeur', 'validerClausesEditeur', 'administrerCanevasEditeur', 'validerCanevasEditeur', 'decisionSuiviSeul', 'ouvrirCandidatureHorsLigne', 'ouvrirOffreHorsLigne', 'ouvrirOffreTechniqueHorsLigne', 'ouvrirAnonymatHorsLigne', 'espaceCollaboratifGestionnaire', 'espaceCollaboratifContributeur', 'gererOrganismes', 'gererAssociationsAgents', 'moduleRedactionUniquement', 'historiqueNavigationInscrits', 'telechargerAccordsCadres', 'creerAnnonceDecisionResiliation', 'creerAnnonceSyntheseRapportAudit', 'gererOperations', 'telechargerSiretAcheteur', 'gererReouverturesModification', 'envoyerDemandeValidation', 'suivreConsultationOrganisme', 'renseignerMontant', 'gestionReferentielContact', 'validationAccesFacture', 'gererCao', 'gestionTravauxCao', ),
        BasePeer::TYPE_COLNAME => array (CommonHabilitationProfilPeer::ID, CommonHabilitationProfilPeer::LIBELLE, CommonHabilitationProfilPeer::GESTION_AGENT_POLE, CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX, CommonHabilitationProfilPeer::GESTION_BI_CLES, CommonHabilitationProfilPeer::CREER_CONSULTATION, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION, CommonHabilitationProfilPeer::VALIDER_CONSULTATION, CommonHabilitationProfilPeer::PUBLIER_CONSULTATION, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE, CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE, CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION, CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE, CommonHabilitationProfilPeer::DEPOUILLER_OFFRE, CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE, CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER, CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER, CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER, CommonHabilitationProfilPeer::GERER_ENCHERES, CommonHabilitationProfilPeer::SUIVRE_ENCHERES, CommonHabilitationProfilPeer::SUIVI_ENTREPRISE, CommonHabilitationProfilPeer::ENVOI_BOAMP, CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT, CommonHabilitationProfilPeer::CONNECTEUR_SIS, CommonHabilitationProfilPeer::CONNECTEUR_MARCO, CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS, CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION, CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO, CommonHabilitationProfilPeer::NOTIFICATION_BOAMP, CommonHabilitationProfilPeer::ADMINISTRER_COMPTE, CommonHabilitationProfilPeer::GESTION_MAPA, CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION, CommonHabilitationProfilPeer::APPROUVER_CONSULTATION, CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE, CommonHabilitationProfilPeer::RESTREINDRE_CREATION, CommonHabilitationProfilPeer::CREER_LISTE_MARCHES, CommonHabilitationProfilPeer::GESTION_COMMISSIONS, CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION, CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE, CommonHabilitationProfilPeer::FICHE_RECENSEMENT, CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX, CommonHabilitationProfilPeer::DECLARER_SANS_SUITE, CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE, CommonHabilitationProfilPeer::REFUSER_ENVELOPPE, CommonHabilitationProfilPeer::GERER_ADMISSIBILITE, CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE, CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE, CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP, CommonHabilitationProfilPeer::GESTION_AGENTS, CommonHabilitationProfilPeer::GESTION_HABILITATIONS, CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT, CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION, CommonHabilitationProfilPeer::ACCES_REPONSES, CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES, CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES, CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE, CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION, CommonHabilitationProfilPeer::SAISIE_MARCHES, CommonHabilitationProfilPeer::VALIDATION_MARCHES, CommonHabilitationProfilPeer::PUBLICATION_MARCHES, CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER, CommonHabilitationProfilPeer::GERER_ARCHIVES, CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES, CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION, CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE, CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE, CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE, CommonHabilitationProfilPeer::VALIDATION_SIMPLE, CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE, CommonHabilitationProfilPeer::VALIDATION_FINALE, CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION, CommonHabilitationProfilPeer::HYPER_ADMIN, CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES, CommonHabilitationProfilPeer::SUIVI_ACCES, CommonHabilitationProfilPeer::STATISTIQUES_SITE, CommonHabilitationProfilPeer::STATISTIQUES_QOS, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE, CommonHabilitationProfilPeer::GESTION_COMPTE_JAL, CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB, CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE, CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE, CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION, CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES, CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES, CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES, CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES, CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES, CommonHabilitationProfilPeer::RESULTAT_ANALYSE, CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE, CommonHabilitationProfilPeer::GERER_MON_SERVICE, CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES, CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV, CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT, CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT, CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL, CommonHabilitationProfilPeer::ANNULER_CONSULTATION, CommonHabilitationProfilPeer::ENVOYER_PUBLICITE, CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES, CommonHabilitationProfilPeer::SUIVRE_MESSAGE, CommonHabilitationProfilPeer::ENVOYER_MESSAGE, CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL, CommonHabilitationProfilPeer::GESTION_MANDATAIRE, CommonHabilitationProfilPeer::GERER_NEWSLETTER, CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE, CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL, CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL, CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC, CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC, CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE, CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR, CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES, CommonHabilitationProfilPeer::VALIDER_CLAUSES, CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS, CommonHabilitationProfilPeer::VALIDER_CANEVAS, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS, CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT, CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR, CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR, CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR, CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR, CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE, CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE, CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE, CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR, CommonHabilitationProfilPeer::GERER_ORGANISMES, CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS, CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT, CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS, CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES, CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION, CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT, CommonHabilitationProfilPeer::GERER_OPERATIONS, CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR, CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION, CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME, CommonHabilitationProfilPeer::RENSEIGNER_MONTANT, CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT, CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE, CommonHabilitationProfilPeer::GERER_CAO, CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LIBELLE', 'GESTION_AGENT_POLE', 'GESTION_FOURNISSEURS_ENVOIS_POSTAUX', 'GESTION_BI_CLES', 'CREER_CONSULTATION', 'MODIFIER_CONSULTATION', 'VALIDER_CONSULTATION', 'PUBLIER_CONSULTATION', 'SUIVRE_CONSULTATION', 'SUIVRE_CONSULTATION_POLE', 'SUPPRIMER_ENVELOPPE', 'SUPPRIMER_CONSULTATION', 'DEPOUILLER_CANDIDATURE', 'DEPOUILLER_OFFRE', 'MESSAGERIE_SECURISEE', 'ACCES_REGISTRE_DEPOTS_PAPIER', 'ACCES_REGISTRE_RETRAITS_PAPIER', 'ACCES_REGISTRE_QUESTIONS_PAPIER', 'GERER_ENCHERES', 'SUIVRE_ENCHERES', 'SUIVI_ENTREPRISE', 'ENVOI_BOAMP', 'ACCES_CLASSEMENT_LOT', 'CONNECTEUR_SIS', 'CONNECTEUR_MARCO', 'REPONDRE_AUX_QUESTIONS', 'APPEL_PROJET_FORMATION', 'UTILISER_CLIENT_CAO', 'NOTIFICATION_BOAMP', 'ADMINISTRER_COMPTE', 'GESTION_MAPA', 'GESTION_TYPE_VALIDATION', 'APPROUVER_CONSULTATION', 'ADMINISTRER_PROCEDURE', 'RESTREINDRE_CREATION', 'CREER_LISTE_MARCHES', 'GESTION_COMMISSIONS', 'SUIVI_SEUL_CONSULTATION', 'ATTRIBUTION_MARCHE', 'FICHE_RECENSEMENT', 'DECLARER_INFRUCTUEUX', 'DECLARER_SANS_SUITE', 'CREER_CONSULTATION_TRANSVERSE', 'OUVRIR_CANDIDATURE_EN_LIGNE', 'OUVRIR_CANDIDATURE_A_DISTANCE', 'REFUSER_ENVELOPPE', 'GERER_ADMISSIBILITE', 'RESTAURER_ENVELOPPE', 'OUVRIR_OFFRE_EN_LIGNE', 'OUVRIR_ANONYMAT_EN_LIGNE', 'GESTION_COMPTE_BOAMP', 'GESTION_AGENTS', 'GESTION_HABILITATIONS', 'GERER_MAPA_INFERIEUR_MONTANT', 'GERER_MAPA_SUPERIEUR_MONTANT', 'MODIFIER_CONSULTATION_AVANT_VALIDATION', 'MODIFIER_CONSULTATION_APRES_VALIDATION', 'ACCES_REPONSES', 'TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES', 'TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES', 'OUVRIR_OFFRE_A_DISTANCE', 'CREER_ANNONCE_INFORMATION', 'SAISIE_MARCHES', 'VALIDATION_MARCHES', 'PUBLICATION_MARCHES', 'GERER_STATISTIQUES_METIER', 'GERER_ARCHIVES', 'ADMINISTRER_PROCEDURES_FORMALISEES', 'CREER_ANNONCE_ATTRIBUTION', 'ACCES_REGISTRE_RETRAITS_ELECTRONIQUE', 'ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE', 'ACCES_REGISTRE_DEPOTS_ELECTRONIQUE', 'VALIDATION_SIMPLE', 'VALIDATION_INTERMEDIAIRE', 'VALIDATION_FINALE', 'CREER_SUITE_CONSULTATION', 'HYPER_ADMIN', 'DROIT_GESTION_SERVICES', 'SUIVI_ACCES', 'STATISTIQUES_SITE', 'STATISTIQUES_QOS', 'OUVRIR_ANONYMAT_A_DISTANCE', 'GESTION_COMPTE_JAL', 'GESTION_CENTRALE_PUB', 'GESTION_COMPTE_GROUPE_MONITEUR', 'OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE', 'OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE', 'ACTIVATION_COMPTE_ENTREPRISE', 'IMPORTER_ENVELOPPE', 'SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER', 'SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER', 'SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER', 'SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE', 'SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE', 'SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE', 'MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION', 'MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION', 'MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION', 'GERER_LES_ENTREPRISES', 'PORTEE_SOCIETES_EXCLUES', 'PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES', 'MODIFIER_SOCIETES_EXCLUES', 'SUPPRIMER_SOCIETES_EXCLUES', 'RESULTAT_ANALYSE', 'GERER_ADRESSES_SERVICE', 'GERER_MON_SERVICE', 'DOWNLOAD_ARCHIVES', 'CREER_ANNONCE_EXTRAIT_PV', 'CREER_ANNONCE_RAPPORT_ACHEVEMENT', 'GESTION_CERTIFICATS_AGENT', 'CREER_AVIS_PROGRAMME_PREVISIONNEL', 'ANNULER_CONSULTATION', 'ENVOYER_PUBLICITE', 'LISTE_MARCHES_NOTIFIES', 'SUIVRE_MESSAGE', 'ENVOYER_MESSAGE', 'SUIVI_FLUX_CHORUS_TRANSVERSAL', 'GESTION_MANDATAIRE', 'GERER_NEWSLETTER', 'GESTION_MODELES_FORMULAIRE', 'GESTION_ADRESSES_FACTURATION_JAL', 'ADMINISTRER_ADRESSES_FACTURATION_JAL', 'REDACTION_DOCUMENTS_REDAC', 'VALIDATION_DOCUMENTS_REDAC', 'GESTION_MISE_DISPOSITION_PIECES_MARCHE', 'ANNUAIRE_ACHETEUR', 'REPRENDRE_INTEGRALEMENT_ARTICLE', 'ADMINISTRER_CLAUSES', 'VALIDER_CLAUSES', 'ADMINISTRER_CANEVAS', 'VALIDER_CANEVAS', 'ADMINISTRER_CLAUSES_ENTITE_ACHATS', 'GENERER_PIECES_FORMAT_ODT', 'PUBLIER_VERSION_CLAUSIER_EDITEUR', 'ADMINISTRER_CLAUSES_EDITEUR', 'VALIDER_CLAUSES_EDITEUR', 'ADMINISTRER_CANEVAS_EDITEUR', 'VALIDER_CANEVAS_EDITEUR', 'DECISION_SUIVI_SEUL', 'OUVRIR_CANDIDATURE_HORS_LIGNE', 'OUVRIR_OFFRE_HORS_LIGNE', 'OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE', 'OUVRIR_ANONYMAT_HORS_LIGNE', 'ESPACE_COLLABORATIF_GESTIONNAIRE', 'ESPACE_COLLABORATIF_CONTRIBUTEUR', 'GERER_ORGANISMES', 'GERER_ASSOCIATIONS_AGENTS', 'MODULE_REDACTION_UNIQUEMENT', 'HISTORIQUE_NAVIGATION_INSCRITS', 'TELECHARGER_ACCORDS_CADRES', 'CREER_ANNONCE_DECISION_RESILIATION', 'CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT', 'GERER_OPERATIONS', 'TELECHARGER_SIRET_ACHETEUR', 'GERER_REOUVERTURES_MODIFICATION', 'ENVOYER_DEMANDE_VALIDATION', 'SUIVRE_CONSULTATION_ORGANISME', 'RENSEIGNER_MONTANT', 'GESTION_REFERENTIEL_CONTACT', 'VALIDATION_ACCES_FACTURE', 'GERER_CAO', 'GESTION_TRAVAUX_CAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'libelle', 'gestion_agent_pole', 'gestion_fournisseurs_envois_postaux', 'gestion_bi_cles', 'creer_consultation', 'modifier_consultation', 'valider_consultation', 'publier_consultation', 'suivre_consultation', 'suivre_consultation_pole', 'supprimer_enveloppe', 'supprimer_consultation', 'depouiller_candidature', 'depouiller_offre', 'messagerie_securisee', 'acces_registre_depots_papier', 'acces_registre_retraits_papier', 'acces_registre_questions_papier', 'gerer_encheres', 'suivre_encheres', 'suivi_entreprise', 'envoi_boamp', 'acces_classement_lot', 'connecteur_sis', 'connecteur_marco', 'repondre_aux_questions', 'appel_projet_formation', 'utiliser_client_CAO', 'notification_boamp', 'administrer_compte', 'gestion_mapa', 'gestion_type_validation', 'approuver_consultation', 'administrer_procedure', 'restreindre_creation', 'creer_liste_marches', 'gestion_commissions', 'suivi_seul_consultation', 'attribution_marche', 'fiche_recensement', 'declarer_infructueux', 'declarer_sans_suite', 'creer_consultation_transverse', 'ouvrir_candidature_en_ligne', 'ouvrir_candidature_a_distance', 'refuser_enveloppe', 'gerer_admissibilite', 'restaurer_enveloppe', 'ouvrir_offre_en_ligne', 'ouvrir_anonymat_en_ligne', 'gestion_compte_boamp', 'gestion_agents', 'gestion_habilitations', 'gerer_mapa_inferieur_montant', 'gerer_mapa_superieur_montant', 'modifier_consultation_avant_validation', 'modifier_consultation_apres_validation', 'acces_reponses', 'telechargement_groupe_anticipe_plis_chiffres', 'telechargement_unitaire_plis_chiffres', 'ouvrir_offre_a_distance', 'creer_annonce_information', 'saisie_marches', 'validation_marches', 'publication_marches', 'gerer_statistiques_metier', 'gerer_archives', 'administrer_procedures_formalisees', 'creer_annonce_attribution', 'acces_registre_retraits_electronique', 'acces_registre_questions_electronique', 'acces_registre_depots_electronique', 'validation_simple', 'validation_intermediaire', 'validation_finale', 'creer_suite_consultation', 'hyper_admin', 'droit_gestion_services', 'suivi_acces', 'statistiques_site', 'statistiques_QoS', 'ouvrir_anonymat_a_distance', 'gestion_compte_jal', 'gestion_centrale_pub', 'Gestion_Compte_Groupe_Moniteur', 'ouvrir_offre_technique_en_ligne', 'ouvrir_offre_technique_a_distance', 'activation_compte_entreprise', 'importer_enveloppe', 'suivi_seul_registre_depots_papier', 'suivi_seul_registre_retraits_papier', 'suivi_seul_registre_questions_papier', 'suivi_seul_registre_depots_electronique', 'suivi_seul_registre_retraits_electronique', 'suivi_seul_registre_questions_electronique', 'modifier_consultation_mapa_inferieur_montant_apres_validation', 'modifier_consultation_mapa_superieur_montant_apres_validation', 'modifier_consultation_procedures_formalisees_apres_validation', 'gerer_les_entreprises', 'portee_societes_exclues', 'portee_societes_exclues_tous_organismes', 'modifier_societes_exclues', 'supprimer_societes_exclues', 'resultat_analyse', 'gerer_adresses_service', 'gerer_mon_service', 'download_archives', 'creer_annonce_extrait_pv', 'creer_annonce_rapport_achevement', 'gestion_certificats_agent', 'creer_avis_programme_previsionnel', 'annuler_consultation', 'envoyer_publicite', 'liste_marches_notifies', 'suivre_message', 'envoyer_message', 'suivi_flux_chorus_transversal', 'gestion_mandataire', 'gerer_newsletter', 'gestion_modeles_formulaire', 'gestion_adresses_facturation_jal', 'administrer_adresses_facturation_jal', 'redaction_documents_redac', 'validation_documents_redac', 'gestion_mise_disposition_pieces_marche', 'annuaire_acheteur', 'reprendre_integralement_article', 'administrer_clauses', 'valider_clauses', 'administrer_canevas', 'valider_canevas', 'administrer_clauses_entite_achats', 'generer_pieces_format_odt', 'publier_version_clausier_editeur', 'administrer_clauses_editeur', 'valider_clauses_editeur', 'administrer_canevas_editeur', 'valider_canevas_editeur', 'decision_suivi_seul', 'ouvrir_candidature_hors_ligne', 'ouvrir_offre_hors_ligne', 'ouvrir_offre_technique_hors_ligne', 'ouvrir_anonymat_hors_ligne', 'espace_collaboratif_gestionnaire', 'espace_collaboratif_contributeur', 'gerer_organismes', 'gerer_associations_agents', 'module_redaction_uniquement', 'historique_navigation_inscrits', 'telecharger_accords_cadres', 'creer_annonce_decision_resiliation', 'creer_annonce_synthese_rapport_audit', 'gerer_operations', 'telecharger_siret_acheteur', 'gerer_reouvertures_modification', 'envoyer_demande_validation', 'suivre_consultation_organisme', 'renseigner_montant', 'gestion_referentiel_contact', 'validation_acces_facture', 'gerer_cao', 'gestion_travaux_cao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonHabilitationProfilPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Libelle' => 1, 'GestionAgentPole' => 2, 'GestionFournisseursEnvoisPostaux' => 3, 'GestionBiCles' => 4, 'CreerConsultation' => 5, 'ModifierConsultation' => 6, 'ValiderConsultation' => 7, 'PublierConsultation' => 8, 'SuivreConsultation' => 9, 'SuivreConsultationPole' => 10, 'SupprimerEnveloppe' => 11, 'SupprimerConsultation' => 12, 'DepouillerCandidature' => 13, 'DepouillerOffre' => 14, 'MessagerieSecurisee' => 15, 'AccesRegistreDepotsPapier' => 16, 'AccesRegistreRetraitsPapier' => 17, 'AccesRegistreQuestionsPapier' => 18, 'GererEncheres' => 19, 'SuivreEncheres' => 20, 'SuiviEntreprise' => 21, 'EnvoiBoamp' => 22, 'AccesClassementLot' => 23, 'ConnecteurSis' => 24, 'ConnecteurMarco' => 25, 'RepondreAuxQuestions' => 26, 'AppelProjetFormation' => 27, 'UtiliserClientCao' => 28, 'NotificationBoamp' => 29, 'AdministrerCompte' => 30, 'GestionMapa' => 31, 'GestionTypeValidation' => 32, 'ApprouverConsultation' => 33, 'AdministrerProcedure' => 34, 'RestreindreCreation' => 35, 'CreerListeMarches' => 36, 'GestionCommissions' => 37, 'SuiviSeulConsultation' => 38, 'AttributionMarche' => 39, 'FicheRecensement' => 40, 'DeclarerInfructueux' => 41, 'DeclarerSansSuite' => 42, 'CreerConsultationTransverse' => 43, 'OuvrirCandidatureEnLigne' => 44, 'OuvrirCandidatureADistance' => 45, 'RefuserEnveloppe' => 46, 'GererAdmissibilite' => 47, 'RestaurerEnveloppe' => 48, 'OuvrirOffreEnLigne' => 49, 'OuvrirAnonymatEnLigne' => 50, 'GestionCompteBoamp' => 51, 'GestionAgents' => 52, 'GestionHabilitations' => 53, 'GererMapaInferieurMontant' => 54, 'GererMapaSuperieurMontant' => 55, 'ModifierConsultationAvantValidation' => 56, 'ModifierConsultationApresValidation' => 57, 'AccesReponses' => 58, 'TelechargementGroupeAnticipePlisChiffres' => 59, 'TelechargementUnitairePlisChiffres' => 60, 'OuvrirOffreADistance' => 61, 'CreerAnnonceInformation' => 62, 'SaisieMarches' => 63, 'ValidationMarches' => 64, 'PublicationMarches' => 65, 'GererStatistiquesMetier' => 66, 'GererArchives' => 67, 'AdministrerProceduresFormalisees' => 68, 'CreerAnnonceAttribution' => 69, 'AccesRegistreRetraitsElectronique' => 70, 'AccesRegistreQuestionsElectronique' => 71, 'AccesRegistreDepotsElectronique' => 72, 'ValidationSimple' => 73, 'ValidationIntermediaire' => 74, 'ValidationFinale' => 75, 'CreerSuiteConsultation' => 76, 'HyperAdmin' => 77, 'DroitGestionServices' => 78, 'SuiviAcces' => 79, 'StatistiquesSite' => 80, 'StatistiquesQos' => 81, 'OuvrirAnonymatADistance' => 82, 'GestionCompteJal' => 83, 'GestionCentralePub' => 84, 'GestionCompteGroupeMoniteur' => 85, 'OuvrirOffreTechniqueEnLigne' => 86, 'OuvrirOffreTechniqueADistance' => 87, 'ActivationCompteEntreprise' => 88, 'ImporterEnveloppe' => 89, 'SuiviSeulRegistreDepotsPapier' => 90, 'SuiviSeulRegistreRetraitsPapier' => 91, 'SuiviSeulRegistreQuestionsPapier' => 92, 'SuiviSeulRegistreDepotsElectronique' => 93, 'SuiviSeulRegistreRetraitsElectronique' => 94, 'SuiviSeulRegistreQuestionsElectronique' => 95, 'ModifierConsultationMapaInferieurMontantApresValidation' => 96, 'ModifierConsultationMapaSuperieurMontantApresValidation' => 97, 'ModifierConsultationProceduresFormaliseesApresValidation' => 98, 'GererLesEntreprises' => 99, 'PorteeSocietesExclues' => 100, 'PorteeSocietesExcluesTousOrganismes' => 101, 'ModifierSocietesExclues' => 102, 'SupprimerSocietesExclues' => 103, 'ResultatAnalyse' => 104, 'GererAdressesService' => 105, 'GererMonService' => 106, 'DownloadArchives' => 107, 'CreerAnnonceExtraitPv' => 108, 'CreerAnnonceRapportAchevement' => 109, 'GestionCertificatsAgent' => 110, 'CreerAvisProgrammePrevisionnel' => 111, 'AnnulerConsultation' => 112, 'EnvoyerPublicite' => 113, 'ListeMarchesNotifies' => 114, 'SuivreMessage' => 115, 'EnvoyerMessage' => 116, 'SuiviFluxChorusTransversal' => 117, 'GestionMandataire' => 118, 'GererNewsletter' => 119, 'GestionModelesFormulaire' => 120, 'GestionAdressesFacturationJal' => 121, 'AdministrerAdressesFacturationJal' => 122, 'RedactionDocumentsRedac' => 123, 'ValidationDocumentsRedac' => 124, 'GestionMiseDispositionPiecesMarche' => 125, 'AnnuaireAcheteur' => 126, 'ReprendreIntegralementArticle' => 127, 'AdministrerClauses' => 128, 'ValiderClauses' => 129, 'AdministrerCanevas' => 130, 'ValiderCanevas' => 131, 'AdministrerClausesEntiteAchats' => 132, 'GenererPiecesFormatOdt' => 133, 'PublierVersionClausierEditeur' => 134, 'AdministrerClausesEditeur' => 135, 'ValiderClausesEditeur' => 136, 'AdministrerCanevasEditeur' => 137, 'ValiderCanevasEditeur' => 138, 'DecisionSuiviSeul' => 139, 'OuvrirCandidatureHorsLigne' => 140, 'OuvrirOffreHorsLigne' => 141, 'OuvrirOffreTechniqueHorsLigne' => 142, 'OuvrirAnonymatHorsLigne' => 143, 'EspaceCollaboratifGestionnaire' => 144, 'EspaceCollaboratifContributeur' => 145, 'GererOrganismes' => 146, 'GererAssociationsAgents' => 147, 'ModuleRedactionUniquement' => 148, 'HistoriqueNavigationInscrits' => 149, 'TelechargerAccordsCadres' => 150, 'CreerAnnonceDecisionResiliation' => 151, 'CreerAnnonceSyntheseRapportAudit' => 152, 'GererOperations' => 153, 'TelechargerSiretAcheteur' => 154, 'GererReouverturesModification' => 155, 'EnvoyerDemandeValidation' => 156, 'SuivreConsultationOrganisme' => 157, 'RenseignerMontant' => 158, 'GestionReferentielContact' => 159, 'ValidationAccesFacture' => 160, 'GererCao' => 161, 'GestionTravauxCao' => 162, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'libelle' => 1, 'gestionAgentPole' => 2, 'gestionFournisseursEnvoisPostaux' => 3, 'gestionBiCles' => 4, 'creerConsultation' => 5, 'modifierConsultation' => 6, 'validerConsultation' => 7, 'publierConsultation' => 8, 'suivreConsultation' => 9, 'suivreConsultationPole' => 10, 'supprimerEnveloppe' => 11, 'supprimerConsultation' => 12, 'depouillerCandidature' => 13, 'depouillerOffre' => 14, 'messagerieSecurisee' => 15, 'accesRegistreDepotsPapier' => 16, 'accesRegistreRetraitsPapier' => 17, 'accesRegistreQuestionsPapier' => 18, 'gererEncheres' => 19, 'suivreEncheres' => 20, 'suiviEntreprise' => 21, 'envoiBoamp' => 22, 'accesClassementLot' => 23, 'connecteurSis' => 24, 'connecteurMarco' => 25, 'repondreAuxQuestions' => 26, 'appelProjetFormation' => 27, 'utiliserClientCao' => 28, 'notificationBoamp' => 29, 'administrerCompte' => 30, 'gestionMapa' => 31, 'gestionTypeValidation' => 32, 'approuverConsultation' => 33, 'administrerProcedure' => 34, 'restreindreCreation' => 35, 'creerListeMarches' => 36, 'gestionCommissions' => 37, 'suiviSeulConsultation' => 38, 'attributionMarche' => 39, 'ficheRecensement' => 40, 'declarerInfructueux' => 41, 'declarerSansSuite' => 42, 'creerConsultationTransverse' => 43, 'ouvrirCandidatureEnLigne' => 44, 'ouvrirCandidatureADistance' => 45, 'refuserEnveloppe' => 46, 'gererAdmissibilite' => 47, 'restaurerEnveloppe' => 48, 'ouvrirOffreEnLigne' => 49, 'ouvrirAnonymatEnLigne' => 50, 'gestionCompteBoamp' => 51, 'gestionAgents' => 52, 'gestionHabilitations' => 53, 'gererMapaInferieurMontant' => 54, 'gererMapaSuperieurMontant' => 55, 'modifierConsultationAvantValidation' => 56, 'modifierConsultationApresValidation' => 57, 'accesReponses' => 58, 'telechargementGroupeAnticipePlisChiffres' => 59, 'telechargementUnitairePlisChiffres' => 60, 'ouvrirOffreADistance' => 61, 'creerAnnonceInformation' => 62, 'saisieMarches' => 63, 'validationMarches' => 64, 'publicationMarches' => 65, 'gererStatistiquesMetier' => 66, 'gererArchives' => 67, 'administrerProceduresFormalisees' => 68, 'creerAnnonceAttribution' => 69, 'accesRegistreRetraitsElectronique' => 70, 'accesRegistreQuestionsElectronique' => 71, 'accesRegistreDepotsElectronique' => 72, 'validationSimple' => 73, 'validationIntermediaire' => 74, 'validationFinale' => 75, 'creerSuiteConsultation' => 76, 'hyperAdmin' => 77, 'droitGestionServices' => 78, 'suiviAcces' => 79, 'statistiquesSite' => 80, 'statistiquesQos' => 81, 'ouvrirAnonymatADistance' => 82, 'gestionCompteJal' => 83, 'gestionCentralePub' => 84, 'gestionCompteGroupeMoniteur' => 85, 'ouvrirOffreTechniqueEnLigne' => 86, 'ouvrirOffreTechniqueADistance' => 87, 'activationCompteEntreprise' => 88, 'importerEnveloppe' => 89, 'suiviSeulRegistreDepotsPapier' => 90, 'suiviSeulRegistreRetraitsPapier' => 91, 'suiviSeulRegistreQuestionsPapier' => 92, 'suiviSeulRegistreDepotsElectronique' => 93, 'suiviSeulRegistreRetraitsElectronique' => 94, 'suiviSeulRegistreQuestionsElectronique' => 95, 'modifierConsultationMapaInferieurMontantApresValidation' => 96, 'modifierConsultationMapaSuperieurMontantApresValidation' => 97, 'modifierConsultationProceduresFormaliseesApresValidation' => 98, 'gererLesEntreprises' => 99, 'porteeSocietesExclues' => 100, 'porteeSocietesExcluesTousOrganismes' => 101, 'modifierSocietesExclues' => 102, 'supprimerSocietesExclues' => 103, 'resultatAnalyse' => 104, 'gererAdressesService' => 105, 'gererMonService' => 106, 'downloadArchives' => 107, 'creerAnnonceExtraitPv' => 108, 'creerAnnonceRapportAchevement' => 109, 'gestionCertificatsAgent' => 110, 'creerAvisProgrammePrevisionnel' => 111, 'annulerConsultation' => 112, 'envoyerPublicite' => 113, 'listeMarchesNotifies' => 114, 'suivreMessage' => 115, 'envoyerMessage' => 116, 'suiviFluxChorusTransversal' => 117, 'gestionMandataire' => 118, 'gererNewsletter' => 119, 'gestionModelesFormulaire' => 120, 'gestionAdressesFacturationJal' => 121, 'administrerAdressesFacturationJal' => 122, 'redactionDocumentsRedac' => 123, 'validationDocumentsRedac' => 124, 'gestionMiseDispositionPiecesMarche' => 125, 'annuaireAcheteur' => 126, 'reprendreIntegralementArticle' => 127, 'administrerClauses' => 128, 'validerClauses' => 129, 'administrerCanevas' => 130, 'validerCanevas' => 131, 'administrerClausesEntiteAchats' => 132, 'genererPiecesFormatOdt' => 133, 'publierVersionClausierEditeur' => 134, 'administrerClausesEditeur' => 135, 'validerClausesEditeur' => 136, 'administrerCanevasEditeur' => 137, 'validerCanevasEditeur' => 138, 'decisionSuiviSeul' => 139, 'ouvrirCandidatureHorsLigne' => 140, 'ouvrirOffreHorsLigne' => 141, 'ouvrirOffreTechniqueHorsLigne' => 142, 'ouvrirAnonymatHorsLigne' => 143, 'espaceCollaboratifGestionnaire' => 144, 'espaceCollaboratifContributeur' => 145, 'gererOrganismes' => 146, 'gererAssociationsAgents' => 147, 'moduleRedactionUniquement' => 148, 'historiqueNavigationInscrits' => 149, 'telechargerAccordsCadres' => 150, 'creerAnnonceDecisionResiliation' => 151, 'creerAnnonceSyntheseRapportAudit' => 152, 'gererOperations' => 153, 'telechargerSiretAcheteur' => 154, 'gererReouverturesModification' => 155, 'envoyerDemandeValidation' => 156, 'suivreConsultationOrganisme' => 157, 'renseignerMontant' => 158, 'gestionReferentielContact' => 159, 'validationAccesFacture' => 160, 'gererCao' => 161, 'gestionTravauxCao' => 162, ),
        BasePeer::TYPE_COLNAME => array (CommonHabilitationProfilPeer::ID => 0, CommonHabilitationProfilPeer::LIBELLE => 1, CommonHabilitationProfilPeer::GESTION_AGENT_POLE => 2, CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX => 3, CommonHabilitationProfilPeer::GESTION_BI_CLES => 4, CommonHabilitationProfilPeer::CREER_CONSULTATION => 5, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION => 6, CommonHabilitationProfilPeer::VALIDER_CONSULTATION => 7, CommonHabilitationProfilPeer::PUBLIER_CONSULTATION => 8, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION => 9, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE => 10, CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE => 11, CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION => 12, CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE => 13, CommonHabilitationProfilPeer::DEPOUILLER_OFFRE => 14, CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE => 15, CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER => 16, CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER => 17, CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER => 18, CommonHabilitationProfilPeer::GERER_ENCHERES => 19, CommonHabilitationProfilPeer::SUIVRE_ENCHERES => 20, CommonHabilitationProfilPeer::SUIVI_ENTREPRISE => 21, CommonHabilitationProfilPeer::ENVOI_BOAMP => 22, CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT => 23, CommonHabilitationProfilPeer::CONNECTEUR_SIS => 24, CommonHabilitationProfilPeer::CONNECTEUR_MARCO => 25, CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS => 26, CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION => 27, CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO => 28, CommonHabilitationProfilPeer::NOTIFICATION_BOAMP => 29, CommonHabilitationProfilPeer::ADMINISTRER_COMPTE => 30, CommonHabilitationProfilPeer::GESTION_MAPA => 31, CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION => 32, CommonHabilitationProfilPeer::APPROUVER_CONSULTATION => 33, CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE => 34, CommonHabilitationProfilPeer::RESTREINDRE_CREATION => 35, CommonHabilitationProfilPeer::CREER_LISTE_MARCHES => 36, CommonHabilitationProfilPeer::GESTION_COMMISSIONS => 37, CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION => 38, CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE => 39, CommonHabilitationProfilPeer::FICHE_RECENSEMENT => 40, CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX => 41, CommonHabilitationProfilPeer::DECLARER_SANS_SUITE => 42, CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE => 43, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE => 44, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE => 45, CommonHabilitationProfilPeer::REFUSER_ENVELOPPE => 46, CommonHabilitationProfilPeer::GERER_ADMISSIBILITE => 47, CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE => 48, CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE => 49, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE => 50, CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP => 51, CommonHabilitationProfilPeer::GESTION_AGENTS => 52, CommonHabilitationProfilPeer::GESTION_HABILITATIONS => 53, CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT => 54, CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT => 55, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION => 56, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION => 57, CommonHabilitationProfilPeer::ACCES_REPONSES => 58, CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES => 59, CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES => 60, CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE => 61, CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION => 62, CommonHabilitationProfilPeer::SAISIE_MARCHES => 63, CommonHabilitationProfilPeer::VALIDATION_MARCHES => 64, CommonHabilitationProfilPeer::PUBLICATION_MARCHES => 65, CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER => 66, CommonHabilitationProfilPeer::GERER_ARCHIVES => 67, CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES => 68, CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION => 69, CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE => 70, CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE => 71, CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE => 72, CommonHabilitationProfilPeer::VALIDATION_SIMPLE => 73, CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE => 74, CommonHabilitationProfilPeer::VALIDATION_FINALE => 75, CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION => 76, CommonHabilitationProfilPeer::HYPER_ADMIN => 77, CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES => 78, CommonHabilitationProfilPeer::SUIVI_ACCES => 79, CommonHabilitationProfilPeer::STATISTIQUES_SITE => 80, CommonHabilitationProfilPeer::STATISTIQUES_QOS => 81, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE => 82, CommonHabilitationProfilPeer::GESTION_COMPTE_JAL => 83, CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB => 84, CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR => 85, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE => 86, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE => 87, CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE => 88, CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE => 89, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER => 90, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER => 91, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER => 92, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE => 93, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE => 94, CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE => 95, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION => 96, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION => 97, CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION => 98, CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES => 99, CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES => 100, CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES => 101, CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES => 102, CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES => 103, CommonHabilitationProfilPeer::RESULTAT_ANALYSE => 104, CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE => 105, CommonHabilitationProfilPeer::GERER_MON_SERVICE => 106, CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES => 107, CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV => 108, CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT => 109, CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT => 110, CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL => 111, CommonHabilitationProfilPeer::ANNULER_CONSULTATION => 112, CommonHabilitationProfilPeer::ENVOYER_PUBLICITE => 113, CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES => 114, CommonHabilitationProfilPeer::SUIVRE_MESSAGE => 115, CommonHabilitationProfilPeer::ENVOYER_MESSAGE => 116, CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL => 117, CommonHabilitationProfilPeer::GESTION_MANDATAIRE => 118, CommonHabilitationProfilPeer::GERER_NEWSLETTER => 119, CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE => 120, CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL => 121, CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL => 122, CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC => 123, CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC => 124, CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE => 125, CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR => 126, CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE => 127, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES => 128, CommonHabilitationProfilPeer::VALIDER_CLAUSES => 129, CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS => 130, CommonHabilitationProfilPeer::VALIDER_CANEVAS => 131, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS => 132, CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT => 133, CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR => 134, CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR => 135, CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR => 136, CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR => 137, CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR => 138, CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL => 139, CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE => 140, CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE => 141, CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE => 142, CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE => 143, CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE => 144, CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR => 145, CommonHabilitationProfilPeer::GERER_ORGANISMES => 146, CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS => 147, CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT => 148, CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS => 149, CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES => 150, CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION => 151, CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT => 152, CommonHabilitationProfilPeer::GERER_OPERATIONS => 153, CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR => 154, CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION => 155, CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION => 156, CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME => 157, CommonHabilitationProfilPeer::RENSEIGNER_MONTANT => 158, CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT => 159, CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE => 160, CommonHabilitationProfilPeer::GERER_CAO => 161, CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO => 162, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LIBELLE' => 1, 'GESTION_AGENT_POLE' => 2, 'GESTION_FOURNISSEURS_ENVOIS_POSTAUX' => 3, 'GESTION_BI_CLES' => 4, 'CREER_CONSULTATION' => 5, 'MODIFIER_CONSULTATION' => 6, 'VALIDER_CONSULTATION' => 7, 'PUBLIER_CONSULTATION' => 8, 'SUIVRE_CONSULTATION' => 9, 'SUIVRE_CONSULTATION_POLE' => 10, 'SUPPRIMER_ENVELOPPE' => 11, 'SUPPRIMER_CONSULTATION' => 12, 'DEPOUILLER_CANDIDATURE' => 13, 'DEPOUILLER_OFFRE' => 14, 'MESSAGERIE_SECURISEE' => 15, 'ACCES_REGISTRE_DEPOTS_PAPIER' => 16, 'ACCES_REGISTRE_RETRAITS_PAPIER' => 17, 'ACCES_REGISTRE_QUESTIONS_PAPIER' => 18, 'GERER_ENCHERES' => 19, 'SUIVRE_ENCHERES' => 20, 'SUIVI_ENTREPRISE' => 21, 'ENVOI_BOAMP' => 22, 'ACCES_CLASSEMENT_LOT' => 23, 'CONNECTEUR_SIS' => 24, 'CONNECTEUR_MARCO' => 25, 'REPONDRE_AUX_QUESTIONS' => 26, 'APPEL_PROJET_FORMATION' => 27, 'UTILISER_CLIENT_CAO' => 28, 'NOTIFICATION_BOAMP' => 29, 'ADMINISTRER_COMPTE' => 30, 'GESTION_MAPA' => 31, 'GESTION_TYPE_VALIDATION' => 32, 'APPROUVER_CONSULTATION' => 33, 'ADMINISTRER_PROCEDURE' => 34, 'RESTREINDRE_CREATION' => 35, 'CREER_LISTE_MARCHES' => 36, 'GESTION_COMMISSIONS' => 37, 'SUIVI_SEUL_CONSULTATION' => 38, 'ATTRIBUTION_MARCHE' => 39, 'FICHE_RECENSEMENT' => 40, 'DECLARER_INFRUCTUEUX' => 41, 'DECLARER_SANS_SUITE' => 42, 'CREER_CONSULTATION_TRANSVERSE' => 43, 'OUVRIR_CANDIDATURE_EN_LIGNE' => 44, 'OUVRIR_CANDIDATURE_A_DISTANCE' => 45, 'REFUSER_ENVELOPPE' => 46, 'GERER_ADMISSIBILITE' => 47, 'RESTAURER_ENVELOPPE' => 48, 'OUVRIR_OFFRE_EN_LIGNE' => 49, 'OUVRIR_ANONYMAT_EN_LIGNE' => 50, 'GESTION_COMPTE_BOAMP' => 51, 'GESTION_AGENTS' => 52, 'GESTION_HABILITATIONS' => 53, 'GERER_MAPA_INFERIEUR_MONTANT' => 54, 'GERER_MAPA_SUPERIEUR_MONTANT' => 55, 'MODIFIER_CONSULTATION_AVANT_VALIDATION' => 56, 'MODIFIER_CONSULTATION_APRES_VALIDATION' => 57, 'ACCES_REPONSES' => 58, 'TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES' => 59, 'TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES' => 60, 'OUVRIR_OFFRE_A_DISTANCE' => 61, 'CREER_ANNONCE_INFORMATION' => 62, 'SAISIE_MARCHES' => 63, 'VALIDATION_MARCHES' => 64, 'PUBLICATION_MARCHES' => 65, 'GERER_STATISTIQUES_METIER' => 66, 'GERER_ARCHIVES' => 67, 'ADMINISTRER_PROCEDURES_FORMALISEES' => 68, 'CREER_ANNONCE_ATTRIBUTION' => 69, 'ACCES_REGISTRE_RETRAITS_ELECTRONIQUE' => 70, 'ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE' => 71, 'ACCES_REGISTRE_DEPOTS_ELECTRONIQUE' => 72, 'VALIDATION_SIMPLE' => 73, 'VALIDATION_INTERMEDIAIRE' => 74, 'VALIDATION_FINALE' => 75, 'CREER_SUITE_CONSULTATION' => 76, 'HYPER_ADMIN' => 77, 'DROIT_GESTION_SERVICES' => 78, 'SUIVI_ACCES' => 79, 'STATISTIQUES_SITE' => 80, 'STATISTIQUES_QOS' => 81, 'OUVRIR_ANONYMAT_A_DISTANCE' => 82, 'GESTION_COMPTE_JAL' => 83, 'GESTION_CENTRALE_PUB' => 84, 'GESTION_COMPTE_GROUPE_MONITEUR' => 85, 'OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE' => 86, 'OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE' => 87, 'ACTIVATION_COMPTE_ENTREPRISE' => 88, 'IMPORTER_ENVELOPPE' => 89, 'SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER' => 90, 'SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER' => 91, 'SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER' => 92, 'SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE' => 93, 'SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE' => 94, 'SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE' => 95, 'MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION' => 96, 'MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION' => 97, 'MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION' => 98, 'GERER_LES_ENTREPRISES' => 99, 'PORTEE_SOCIETES_EXCLUES' => 100, 'PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES' => 101, 'MODIFIER_SOCIETES_EXCLUES' => 102, 'SUPPRIMER_SOCIETES_EXCLUES' => 103, 'RESULTAT_ANALYSE' => 104, 'GERER_ADRESSES_SERVICE' => 105, 'GERER_MON_SERVICE' => 106, 'DOWNLOAD_ARCHIVES' => 107, 'CREER_ANNONCE_EXTRAIT_PV' => 108, 'CREER_ANNONCE_RAPPORT_ACHEVEMENT' => 109, 'GESTION_CERTIFICATS_AGENT' => 110, 'CREER_AVIS_PROGRAMME_PREVISIONNEL' => 111, 'ANNULER_CONSULTATION' => 112, 'ENVOYER_PUBLICITE' => 113, 'LISTE_MARCHES_NOTIFIES' => 114, 'SUIVRE_MESSAGE' => 115, 'ENVOYER_MESSAGE' => 116, 'SUIVI_FLUX_CHORUS_TRANSVERSAL' => 117, 'GESTION_MANDATAIRE' => 118, 'GERER_NEWSLETTER' => 119, 'GESTION_MODELES_FORMULAIRE' => 120, 'GESTION_ADRESSES_FACTURATION_JAL' => 121, 'ADMINISTRER_ADRESSES_FACTURATION_JAL' => 122, 'REDACTION_DOCUMENTS_REDAC' => 123, 'VALIDATION_DOCUMENTS_REDAC' => 124, 'GESTION_MISE_DISPOSITION_PIECES_MARCHE' => 125, 'ANNUAIRE_ACHETEUR' => 126, 'REPRENDRE_INTEGRALEMENT_ARTICLE' => 127, 'ADMINISTRER_CLAUSES' => 128, 'VALIDER_CLAUSES' => 129, 'ADMINISTRER_CANEVAS' => 130, 'VALIDER_CANEVAS' => 131, 'ADMINISTRER_CLAUSES_ENTITE_ACHATS' => 132, 'GENERER_PIECES_FORMAT_ODT' => 133, 'PUBLIER_VERSION_CLAUSIER_EDITEUR' => 134, 'ADMINISTRER_CLAUSES_EDITEUR' => 135, 'VALIDER_CLAUSES_EDITEUR' => 136, 'ADMINISTRER_CANEVAS_EDITEUR' => 137, 'VALIDER_CANEVAS_EDITEUR' => 138, 'DECISION_SUIVI_SEUL' => 139, 'OUVRIR_CANDIDATURE_HORS_LIGNE' => 140, 'OUVRIR_OFFRE_HORS_LIGNE' => 141, 'OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE' => 142, 'OUVRIR_ANONYMAT_HORS_LIGNE' => 143, 'ESPACE_COLLABORATIF_GESTIONNAIRE' => 144, 'ESPACE_COLLABORATIF_CONTRIBUTEUR' => 145, 'GERER_ORGANISMES' => 146, 'GERER_ASSOCIATIONS_AGENTS' => 147, 'MODULE_REDACTION_UNIQUEMENT' => 148, 'HISTORIQUE_NAVIGATION_INSCRITS' => 149, 'TELECHARGER_ACCORDS_CADRES' => 150, 'CREER_ANNONCE_DECISION_RESILIATION' => 151, 'CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT' => 152, 'GERER_OPERATIONS' => 153, 'TELECHARGER_SIRET_ACHETEUR' => 154, 'GERER_REOUVERTURES_MODIFICATION' => 155, 'ENVOYER_DEMANDE_VALIDATION' => 156, 'SUIVRE_CONSULTATION_ORGANISME' => 157, 'RENSEIGNER_MONTANT' => 158, 'GESTION_REFERENTIEL_CONTACT' => 159, 'VALIDATION_ACCES_FACTURE' => 160, 'GERER_CAO' => 161, 'GESTION_TRAVAUX_CAO' => 162, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'libelle' => 1, 'gestion_agent_pole' => 2, 'gestion_fournisseurs_envois_postaux' => 3, 'gestion_bi_cles' => 4, 'creer_consultation' => 5, 'modifier_consultation' => 6, 'valider_consultation' => 7, 'publier_consultation' => 8, 'suivre_consultation' => 9, 'suivre_consultation_pole' => 10, 'supprimer_enveloppe' => 11, 'supprimer_consultation' => 12, 'depouiller_candidature' => 13, 'depouiller_offre' => 14, 'messagerie_securisee' => 15, 'acces_registre_depots_papier' => 16, 'acces_registre_retraits_papier' => 17, 'acces_registre_questions_papier' => 18, 'gerer_encheres' => 19, 'suivre_encheres' => 20, 'suivi_entreprise' => 21, 'envoi_boamp' => 22, 'acces_classement_lot' => 23, 'connecteur_sis' => 24, 'connecteur_marco' => 25, 'repondre_aux_questions' => 26, 'appel_projet_formation' => 27, 'utiliser_client_CAO' => 28, 'notification_boamp' => 29, 'administrer_compte' => 30, 'gestion_mapa' => 31, 'gestion_type_validation' => 32, 'approuver_consultation' => 33, 'administrer_procedure' => 34, 'restreindre_creation' => 35, 'creer_liste_marches' => 36, 'gestion_commissions' => 37, 'suivi_seul_consultation' => 38, 'attribution_marche' => 39, 'fiche_recensement' => 40, 'declarer_infructueux' => 41, 'declarer_sans_suite' => 42, 'creer_consultation_transverse' => 43, 'ouvrir_candidature_en_ligne' => 44, 'ouvrir_candidature_a_distance' => 45, 'refuser_enveloppe' => 46, 'gerer_admissibilite' => 47, 'restaurer_enveloppe' => 48, 'ouvrir_offre_en_ligne' => 49, 'ouvrir_anonymat_en_ligne' => 50, 'gestion_compte_boamp' => 51, 'gestion_agents' => 52, 'gestion_habilitations' => 53, 'gerer_mapa_inferieur_montant' => 54, 'gerer_mapa_superieur_montant' => 55, 'modifier_consultation_avant_validation' => 56, 'modifier_consultation_apres_validation' => 57, 'acces_reponses' => 58, 'telechargement_groupe_anticipe_plis_chiffres' => 59, 'telechargement_unitaire_plis_chiffres' => 60, 'ouvrir_offre_a_distance' => 61, 'creer_annonce_information' => 62, 'saisie_marches' => 63, 'validation_marches' => 64, 'publication_marches' => 65, 'gerer_statistiques_metier' => 66, 'gerer_archives' => 67, 'administrer_procedures_formalisees' => 68, 'creer_annonce_attribution' => 69, 'acces_registre_retraits_electronique' => 70, 'acces_registre_questions_electronique' => 71, 'acces_registre_depots_electronique' => 72, 'validation_simple' => 73, 'validation_intermediaire' => 74, 'validation_finale' => 75, 'creer_suite_consultation' => 76, 'hyper_admin' => 77, 'droit_gestion_services' => 78, 'suivi_acces' => 79, 'statistiques_site' => 80, 'statistiques_QoS' => 81, 'ouvrir_anonymat_a_distance' => 82, 'gestion_compte_jal' => 83, 'gestion_centrale_pub' => 84, 'Gestion_Compte_Groupe_Moniteur' => 85, 'ouvrir_offre_technique_en_ligne' => 86, 'ouvrir_offre_technique_a_distance' => 87, 'activation_compte_entreprise' => 88, 'importer_enveloppe' => 89, 'suivi_seul_registre_depots_papier' => 90, 'suivi_seul_registre_retraits_papier' => 91, 'suivi_seul_registre_questions_papier' => 92, 'suivi_seul_registre_depots_electronique' => 93, 'suivi_seul_registre_retraits_electronique' => 94, 'suivi_seul_registre_questions_electronique' => 95, 'modifier_consultation_mapa_inferieur_montant_apres_validation' => 96, 'modifier_consultation_mapa_superieur_montant_apres_validation' => 97, 'modifier_consultation_procedures_formalisees_apres_validation' => 98, 'gerer_les_entreprises' => 99, 'portee_societes_exclues' => 100, 'portee_societes_exclues_tous_organismes' => 101, 'modifier_societes_exclues' => 102, 'supprimer_societes_exclues' => 103, 'resultat_analyse' => 104, 'gerer_adresses_service' => 105, 'gerer_mon_service' => 106, 'download_archives' => 107, 'creer_annonce_extrait_pv' => 108, 'creer_annonce_rapport_achevement' => 109, 'gestion_certificats_agent' => 110, 'creer_avis_programme_previsionnel' => 111, 'annuler_consultation' => 112, 'envoyer_publicite' => 113, 'liste_marches_notifies' => 114, 'suivre_message' => 115, 'envoyer_message' => 116, 'suivi_flux_chorus_transversal' => 117, 'gestion_mandataire' => 118, 'gerer_newsletter' => 119, 'gestion_modeles_formulaire' => 120, 'gestion_adresses_facturation_jal' => 121, 'administrer_adresses_facturation_jal' => 122, 'redaction_documents_redac' => 123, 'validation_documents_redac' => 124, 'gestion_mise_disposition_pieces_marche' => 125, 'annuaire_acheteur' => 126, 'reprendre_integralement_article' => 127, 'administrer_clauses' => 128, 'valider_clauses' => 129, 'administrer_canevas' => 130, 'valider_canevas' => 131, 'administrer_clauses_entite_achats' => 132, 'generer_pieces_format_odt' => 133, 'publier_version_clausier_editeur' => 134, 'administrer_clauses_editeur' => 135, 'valider_clauses_editeur' => 136, 'administrer_canevas_editeur' => 137, 'valider_canevas_editeur' => 138, 'decision_suivi_seul' => 139, 'ouvrir_candidature_hors_ligne' => 140, 'ouvrir_offre_hors_ligne' => 141, 'ouvrir_offre_technique_hors_ligne' => 142, 'ouvrir_anonymat_hors_ligne' => 143, 'espace_collaboratif_gestionnaire' => 144, 'espace_collaboratif_contributeur' => 145, 'gerer_organismes' => 146, 'gerer_associations_agents' => 147, 'module_redaction_uniquement' => 148, 'historique_navigation_inscrits' => 149, 'telecharger_accords_cadres' => 150, 'creer_annonce_decision_resiliation' => 151, 'creer_annonce_synthese_rapport_audit' => 152, 'gerer_operations' => 153, 'telecharger_siret_acheteur' => 154, 'gerer_reouvertures_modification' => 155, 'envoyer_demande_validation' => 156, 'suivre_consultation_organisme' => 157, 'renseigner_montant' => 158, 'gestion_referentiel_contact' => 159, 'validation_acces_facture' => 160, 'gerer_cao' => 161, 'gestion_travaux_cao' => 162, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, 162, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonHabilitationProfilPeer::GESTION_AGENT_POLE => array(
            CommonHabilitationProfilPeer::GESTION_AGENT_POLE_0,
            CommonHabilitationProfilPeer::GESTION_AGENT_POLE_1,
        ),
        CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX => array(
            CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX_0,
            CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX_1,
        ),
        CommonHabilitationProfilPeer::GESTION_BI_CLES => array(
            CommonHabilitationProfilPeer::GESTION_BI_CLES_0,
            CommonHabilitationProfilPeer::GESTION_BI_CLES_1,
        ),
        CommonHabilitationProfilPeer::CREER_CONSULTATION => array(
            CommonHabilitationProfilPeer::CREER_CONSULTATION_0,
            CommonHabilitationProfilPeer::CREER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::VALIDER_CONSULTATION => array(
            CommonHabilitationProfilPeer::VALIDER_CONSULTATION_0,
            CommonHabilitationProfilPeer::VALIDER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::PUBLIER_CONSULTATION => array(
            CommonHabilitationProfilPeer::PUBLIER_CONSULTATION_0,
            CommonHabilitationProfilPeer::PUBLIER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::SUIVRE_CONSULTATION => array(
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_0,
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE => array(
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE_0,
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE_1,
        ),
        CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE => array(
            CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE_0,
            CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE_1,
        ),
        CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION => array(
            CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION_0,
            CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE => array(
            CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE_0,
            CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE_1,
        ),
        CommonHabilitationProfilPeer::DEPOUILLER_OFFRE => array(
            CommonHabilitationProfilPeer::DEPOUILLER_OFFRE_0,
            CommonHabilitationProfilPeer::DEPOUILLER_OFFRE_1,
        ),
        CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE => array(
            CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE_0,
            CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::GERER_ENCHERES => array(
            CommonHabilitationProfilPeer::GERER_ENCHERES_0,
            CommonHabilitationProfilPeer::GERER_ENCHERES_1,
        ),
        CommonHabilitationProfilPeer::SUIVRE_ENCHERES => array(
            CommonHabilitationProfilPeer::SUIVRE_ENCHERES_0,
            CommonHabilitationProfilPeer::SUIVRE_ENCHERES_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_ENTREPRISE => array(
            CommonHabilitationProfilPeer::SUIVI_ENTREPRISE_0,
            CommonHabilitationProfilPeer::SUIVI_ENTREPRISE_1,
        ),
        CommonHabilitationProfilPeer::ENVOI_BOAMP => array(
            CommonHabilitationProfilPeer::ENVOI_BOAMP_0,
            CommonHabilitationProfilPeer::ENVOI_BOAMP_1,
        ),
        CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT => array(
            CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT_0,
            CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT_1,
        ),
        CommonHabilitationProfilPeer::CONNECTEUR_SIS => array(
            CommonHabilitationProfilPeer::CONNECTEUR_SIS_0,
            CommonHabilitationProfilPeer::CONNECTEUR_SIS_1,
        ),
        CommonHabilitationProfilPeer::CONNECTEUR_MARCO => array(
            CommonHabilitationProfilPeer::CONNECTEUR_MARCO_0,
            CommonHabilitationProfilPeer::CONNECTEUR_MARCO_1,
        ),
        CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS => array(
            CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS_0,
            CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS_1,
        ),
        CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION => array(
            CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION_0,
            CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION_1,
        ),
        CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO => array(
            CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO_0,
            CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO_1,
        ),
        CommonHabilitationProfilPeer::NOTIFICATION_BOAMP => array(
            CommonHabilitationProfilPeer::NOTIFICATION_BOAMP_0,
            CommonHabilitationProfilPeer::NOTIFICATION_BOAMP_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_COMPTE => array(
            CommonHabilitationProfilPeer::ADMINISTRER_COMPTE_0,
            CommonHabilitationProfilPeer::ADMINISTRER_COMPTE_1,
        ),
        CommonHabilitationProfilPeer::GESTION_MAPA => array(
            CommonHabilitationProfilPeer::GESTION_MAPA_0,
            CommonHabilitationProfilPeer::GESTION_MAPA_1,
        ),
        CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION => array(
            CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION_0,
            CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::APPROUVER_CONSULTATION => array(
            CommonHabilitationProfilPeer::APPROUVER_CONSULTATION_0,
            CommonHabilitationProfilPeer::APPROUVER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE => array(
            CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE_0,
            CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE_1,
        ),
        CommonHabilitationProfilPeer::RESTREINDRE_CREATION => array(
            CommonHabilitationProfilPeer::RESTREINDRE_CREATION_0,
            CommonHabilitationProfilPeer::RESTREINDRE_CREATION_1,
        ),
        CommonHabilitationProfilPeer::CREER_LISTE_MARCHES => array(
            CommonHabilitationProfilPeer::CREER_LISTE_MARCHES_0,
            CommonHabilitationProfilPeer::CREER_LISTE_MARCHES_1,
        ),
        CommonHabilitationProfilPeer::GESTION_COMMISSIONS => array(
            CommonHabilitationProfilPeer::GESTION_COMMISSIONS_0,
            CommonHabilitationProfilPeer::GESTION_COMMISSIONS_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE => array(
            CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE_0,
            CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE_1,
        ),
        CommonHabilitationProfilPeer::FICHE_RECENSEMENT => array(
            CommonHabilitationProfilPeer::FICHE_RECENSEMENT_0,
            CommonHabilitationProfilPeer::FICHE_RECENSEMENT_1,
        ),
        CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX => array(
            CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX_0,
            CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX_1,
        ),
        CommonHabilitationProfilPeer::DECLARER_SANS_SUITE => array(
            CommonHabilitationProfilPeer::DECLARER_SANS_SUITE_0,
            CommonHabilitationProfilPeer::DECLARER_SANS_SUITE_1,
        ),
        CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE => array(
            CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE_0,
            CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE => array(
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE_0,
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE_1,
        ),
        CommonHabilitationProfilPeer::REFUSER_ENVELOPPE => array(
            CommonHabilitationProfilPeer::REFUSER_ENVELOPPE_0,
            CommonHabilitationProfilPeer::REFUSER_ENVELOPPE_1,
        ),
        CommonHabilitationProfilPeer::GERER_ADMISSIBILITE => array(
            CommonHabilitationProfilPeer::GERER_ADMISSIBILITE_0,
            CommonHabilitationProfilPeer::GERER_ADMISSIBILITE_1,
        ),
        CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE => array(
            CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE_0,
            CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP => array(
            CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP_0,
            CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP_1,
        ),
        CommonHabilitationProfilPeer::GESTION_AGENTS => array(
            CommonHabilitationProfilPeer::GESTION_AGENTS_0,
            CommonHabilitationProfilPeer::GESTION_AGENTS_1,
        ),
        CommonHabilitationProfilPeer::GESTION_HABILITATIONS => array(
            CommonHabilitationProfilPeer::GESTION_HABILITATIONS_0,
            CommonHabilitationProfilPeer::GESTION_HABILITATIONS_1,
        ),
        CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT => array(
            CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT_0,
            CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT_1,
        ),
        CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT => array(
            CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT_0,
            CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REPONSES => array(
            CommonHabilitationProfilPeer::ACCES_REPONSES_0,
            CommonHabilitationProfilPeer::ACCES_REPONSES_1,
        ),
        CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES => array(
            CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_0,
            CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_1,
        ),
        CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES => array(
            CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_0,
            CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION_1,
        ),
        CommonHabilitationProfilPeer::SAISIE_MARCHES => array(
            CommonHabilitationProfilPeer::SAISIE_MARCHES_0,
            CommonHabilitationProfilPeer::SAISIE_MARCHES_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_MARCHES => array(
            CommonHabilitationProfilPeer::VALIDATION_MARCHES_0,
            CommonHabilitationProfilPeer::VALIDATION_MARCHES_1,
        ),
        CommonHabilitationProfilPeer::PUBLICATION_MARCHES => array(
            CommonHabilitationProfilPeer::PUBLICATION_MARCHES_0,
            CommonHabilitationProfilPeer::PUBLICATION_MARCHES_1,
        ),
        CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER => array(
            CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER_0,
            CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER_1,
        ),
        CommonHabilitationProfilPeer::GERER_ARCHIVES => array(
            CommonHabilitationProfilPeer::GERER_ARCHIVES_0,
            CommonHabilitationProfilPeer::GERER_ARCHIVES_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES => array(
            CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES_0,
            CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_SIMPLE => array(
            CommonHabilitationProfilPeer::VALIDATION_SIMPLE_0,
            CommonHabilitationProfilPeer::VALIDATION_SIMPLE_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE => array(
            CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE_0,
            CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_FINALE => array(
            CommonHabilitationProfilPeer::VALIDATION_FINALE_0,
            CommonHabilitationProfilPeer::VALIDATION_FINALE_1,
        ),
        CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION => array(
            CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION_0,
            CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::HYPER_ADMIN => array(
            CommonHabilitationProfilPeer::HYPER_ADMIN_0,
            CommonHabilitationProfilPeer::HYPER_ADMIN_1,
        ),
        CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES => array(
            CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES_0,
            CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_ACCES => array(
            CommonHabilitationProfilPeer::SUIVI_ACCES_0,
            CommonHabilitationProfilPeer::SUIVI_ACCES_1,
        ),
        CommonHabilitationProfilPeer::STATISTIQUES_SITE => array(
            CommonHabilitationProfilPeer::STATISTIQUES_SITE_0,
            CommonHabilitationProfilPeer::STATISTIQUES_SITE_1,
        ),
        CommonHabilitationProfilPeer::STATISTIQUES_QOS => array(
            CommonHabilitationProfilPeer::STATISTIQUES_QOS_0,
            CommonHabilitationProfilPeer::STATISTIQUES_QOS_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE => array(
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE_0,
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE_1,
        ),
        CommonHabilitationProfilPeer::GESTION_COMPTE_JAL => array(
            CommonHabilitationProfilPeer::GESTION_COMPTE_JAL_0,
            CommonHabilitationProfilPeer::GESTION_COMPTE_JAL_1,
        ),
        CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB => array(
            CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB_0,
            CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB_1,
        ),
        CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR => array(
            CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR_0,
            CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_1,
        ),
        CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE => array(
            CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE_0,
            CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE_1,
        ),
        CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE => array(
            CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE_0,
            CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE => array(
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_0,
            CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION => array(
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_0,
            CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES => array(
            CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES_0,
            CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES_1,
        ),
        CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES => array(
            CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_0,
            CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES => array(
            CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_0,
            CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_1,
        ),
        CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES => array(
            CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES_0,
            CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES => array(
            CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES_0,
            CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationProfilPeer::RESULTAT_ANALYSE => array(
            CommonHabilitationProfilPeer::RESULTAT_ANALYSE_0,
            CommonHabilitationProfilPeer::RESULTAT_ANALYSE_1,
        ),
        CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE => array(
            CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE_0,
            CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE_1,
        ),
        CommonHabilitationProfilPeer::GERER_MON_SERVICE => array(
            CommonHabilitationProfilPeer::GERER_MON_SERVICE_0,
            CommonHabilitationProfilPeer::GERER_MON_SERVICE_1,
        ),
        CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES => array(
            CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES_0,
            CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT_1,
        ),
        CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT => array(
            CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT_0,
            CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT_1,
        ),
        CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL => array(
            CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL_0,
            CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL_1,
        ),
        CommonHabilitationProfilPeer::ANNULER_CONSULTATION => array(
            CommonHabilitationProfilPeer::ANNULER_CONSULTATION_0,
            CommonHabilitationProfilPeer::ANNULER_CONSULTATION_1,
        ),
        CommonHabilitationProfilPeer::ENVOYER_PUBLICITE => array(
            CommonHabilitationProfilPeer::ENVOYER_PUBLICITE_0,
            CommonHabilitationProfilPeer::ENVOYER_PUBLICITE_1,
        ),
        CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES => array(
            CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES_0,
            CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES_1,
        ),
        CommonHabilitationProfilPeer::SUIVRE_MESSAGE => array(
            CommonHabilitationProfilPeer::SUIVRE_MESSAGE_0,
            CommonHabilitationProfilPeer::SUIVRE_MESSAGE_1,
        ),
        CommonHabilitationProfilPeer::ENVOYER_MESSAGE => array(
            CommonHabilitationProfilPeer::ENVOYER_MESSAGE_0,
            CommonHabilitationProfilPeer::ENVOYER_MESSAGE_1,
        ),
        CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL => array(
            CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL_0,
            CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL_1,
        ),
        CommonHabilitationProfilPeer::GESTION_MANDATAIRE => array(
            CommonHabilitationProfilPeer::GESTION_MANDATAIRE_0,
            CommonHabilitationProfilPeer::GESTION_MANDATAIRE_1,
        ),
        CommonHabilitationProfilPeer::GERER_NEWSLETTER => array(
            CommonHabilitationProfilPeer::GERER_NEWSLETTER_0,
            CommonHabilitationProfilPeer::GERER_NEWSLETTER_1,
        ),
        CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE => array(
            CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE_0,
            CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE_1,
        ),
        CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL => array(
            CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL_0,
            CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL => array(
            CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL_0,
            CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL_1,
        ),
        CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC => array(
            CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC_0,
            CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC => array(
            CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC_0,
            CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC_1,
        ),
        CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE => array(
            CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE_0,
            CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE_1,
        ),
        CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR => array(
            CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR_0,
            CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR_1,
        ),
        CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE => array(
            CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE_0,
            CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES => array(
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_0,
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_1,
        ),
        CommonHabilitationProfilPeer::VALIDER_CLAUSES => array(
            CommonHabilitationProfilPeer::VALIDER_CLAUSES_0,
            CommonHabilitationProfilPeer::VALIDER_CLAUSES_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS => array(
            CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_0,
            CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_1,
        ),
        CommonHabilitationProfilPeer::VALIDER_CANEVAS => array(
            CommonHabilitationProfilPeer::VALIDER_CANEVAS_0,
            CommonHabilitationProfilPeer::VALIDER_CANEVAS_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS => array(
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS_0,
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS_1,
        ),
        CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT => array(
            CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT_0,
            CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT_1,
        ),
        CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR => array(
            CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR_0,
            CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR => array(
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR_0,
            CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR_1,
        ),
        CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR => array(
            CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR_0,
            CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR_1,
        ),
        CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR => array(
            CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR_0,
            CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR_1,
        ),
        CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR => array(
            CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR_0,
            CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR_1,
        ),
        CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL => array(
            CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL_0,
            CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE => array(
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE_0,
            CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE_1,
        ),
        CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE => array(
            CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE_0,
            CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE_1,
        ),
        CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR => array(
            CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR_0,
            CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR_1,
        ),
        CommonHabilitationProfilPeer::GERER_ORGANISMES => array(
            CommonHabilitationProfilPeer::GERER_ORGANISMES_0,
            CommonHabilitationProfilPeer::GERER_ORGANISMES_1,
        ),
        CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS => array(
            CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS_0,
            CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS_1,
        ),
        CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT => array(
            CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT_0,
            CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT_1,
        ),
        CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS => array(
            CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS_0,
            CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS_1,
        ),
        CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES => array(
            CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES_0,
            CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION_1,
        ),
        CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT => array(
            CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_0,
            CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_1,
        ),
        CommonHabilitationProfilPeer::GERER_OPERATIONS => array(
            CommonHabilitationProfilPeer::GERER_OPERATIONS_0,
            CommonHabilitationProfilPeer::GERER_OPERATIONS_1,
        ),
        CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR => array(
            CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR_0,
            CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR_1,
        ),
        CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION => array(
            CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION_0,
            CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION_1,
        ),
        CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION => array(
            CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION_0,
            CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION_1,
        ),
        CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME => array(
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME_0,
            CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME_1,
        ),
        CommonHabilitationProfilPeer::RENSEIGNER_MONTANT => array(
            CommonHabilitationProfilPeer::RENSEIGNER_MONTANT_0,
            CommonHabilitationProfilPeer::RENSEIGNER_MONTANT_1,
        ),
        CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT => array(
            CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT_0,
            CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT_1,
        ),
        CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE => array(
            CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE_0,
            CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE_1,
        ),
        CommonHabilitationProfilPeer::GERER_CAO => array(
            CommonHabilitationProfilPeer::GERER_CAO_0,
            CommonHabilitationProfilPeer::GERER_CAO_1,
        ),
        CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO => array(
            CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO_0,
            CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO_1,
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
        $toNames = CommonHabilitationProfilPeer::getFieldNames($toType);
        $key = isset(CommonHabilitationProfilPeer::$fieldKeys[$fromType][$name]) ? CommonHabilitationProfilPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonHabilitationProfilPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonHabilitationProfilPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonHabilitationProfilPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonHabilitationProfilPeer::$enumValueSets;
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
        $valueSets = CommonHabilitationProfilPeer::getValueSets();

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
        $values = CommonHabilitationProfilPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonHabilitationProfilPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonHabilitationProfilPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ID);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::LIBELLE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_AGENT_POLE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_BI_CLES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::PUBLIER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVRE_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_POLE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUPPRIMER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUPPRIMER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DEPOUILLER_CANDIDATURE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DEPOUILLER_OFFRE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MESSAGERIE_SECURISEE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ENCHERES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVRE_ENCHERES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_ENTREPRISE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ENVOI_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_CLASSEMENT_LOT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CONNECTEUR_SIS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CONNECTEUR_MARCO);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::REPONDRE_AUX_QUESTIONS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::APPEL_PROJET_FORMATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::UTILISER_CLIENT_CAO);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::NOTIFICATION_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_COMPTE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_MAPA);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_TYPE_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::APPROUVER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::RESTREINDRE_CREATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_LISTE_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_COMMISSIONS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ATTRIBUTION_MARCHE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::FICHE_RECENSEMENT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DECLARER_INFRUCTUEUX);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DECLARER_SANS_SUITE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_CONSULTATION_TRANSVERSE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::REFUSER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ADMISSIBILITE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::RESTAURER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_COMPTE_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_AGENTS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_HABILITATIONS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_MAPA_INFERIEUR_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_MAPA_SUPERIEUR_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REPONSES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_INFORMATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SAISIE_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::PUBLICATION_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_STATISTIQUES_METIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ARCHIVES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_PROCEDURES_FORMALISEES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_ATTRIBUTION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_SIMPLE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_INTERMEDIAIRE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_FINALE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_SUITE_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::HYPER_ADMIN);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DROIT_GESTION_SERVICES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_ACCES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::STATISTIQUES_SITE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::STATISTIQUES_QOS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_COMPTE_JAL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_CENTRALE_PUB);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_COMPTE_GROUPE_MONITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ACTIVATION_COMPTE_ENTREPRISE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::IMPORTER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_LES_ENTREPRISES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODIFIER_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUPPRIMER_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::RESULTAT_ANALYSE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ADRESSES_SERVICE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_MON_SERVICE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DOWNLOAD_ARCHIVES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_EXTRAIT_PV);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_CERTIFICATS_AGENT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ANNULER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ENVOYER_PUBLICITE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::LISTE_MARCHES_NOTIFIES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVRE_MESSAGE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ENVOYER_MESSAGE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_MANDATAIRE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_NEWSLETTER);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_MODELES_FORMULAIRE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_ADRESSES_FACTURATION_JAL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::REDACTION_DOCUMENTS_REDAC);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_DOCUMENTS_REDAC);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ANNUAIRE_ACHETEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::REPRENDRE_INTEGRALEMENT_ARTICLE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDER_CLAUSES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDER_CANEVAS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GENERER_PIECES_FORMAT_ODT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_CLAUSES_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDER_CLAUSES_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ADMINISTRER_CANEVAS_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDER_CANEVAS_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::DECISION_SUIVI_SEUL);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_CANDIDATURE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::OUVRIR_ANONYMAT_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_GESTIONNAIRE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ORGANISMES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_ASSOCIATIONS_AGENTS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::MODULE_REDACTION_UNIQUEMENT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::HISTORIQUE_NAVIGATION_INSCRITS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::TELECHARGER_ACCORDS_CADRES);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_DECISION_RESILIATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_OPERATIONS);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::TELECHARGER_SIRET_ACHETEUR);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_REOUVERTURES_MODIFICATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::ENVOYER_DEMANDE_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::SUIVRE_CONSULTATION_ORGANISME);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::RENSEIGNER_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_REFERENTIEL_CONTACT);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::VALIDATION_ACCES_FACTURE);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GERER_CAO);
            $criteria->addSelectColumn(CommonHabilitationProfilPeer::GESTION_TRAVAUX_CAO);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.gestion_agent_pole');
            $criteria->addSelectColumn($alias . '.gestion_fournisseurs_envois_postaux');
            $criteria->addSelectColumn($alias . '.gestion_bi_cles');
            $criteria->addSelectColumn($alias . '.creer_consultation');
            $criteria->addSelectColumn($alias . '.modifier_consultation');
            $criteria->addSelectColumn($alias . '.valider_consultation');
            $criteria->addSelectColumn($alias . '.publier_consultation');
            $criteria->addSelectColumn($alias . '.suivre_consultation');
            $criteria->addSelectColumn($alias . '.suivre_consultation_pole');
            $criteria->addSelectColumn($alias . '.supprimer_enveloppe');
            $criteria->addSelectColumn($alias . '.supprimer_consultation');
            $criteria->addSelectColumn($alias . '.depouiller_candidature');
            $criteria->addSelectColumn($alias . '.depouiller_offre');
            $criteria->addSelectColumn($alias . '.messagerie_securisee');
            $criteria->addSelectColumn($alias . '.acces_registre_depots_papier');
            $criteria->addSelectColumn($alias . '.acces_registre_retraits_papier');
            $criteria->addSelectColumn($alias . '.acces_registre_questions_papier');
            $criteria->addSelectColumn($alias . '.gerer_encheres');
            $criteria->addSelectColumn($alias . '.suivre_encheres');
            $criteria->addSelectColumn($alias . '.suivi_entreprise');
            $criteria->addSelectColumn($alias . '.envoi_boamp');
            $criteria->addSelectColumn($alias . '.acces_classement_lot');
            $criteria->addSelectColumn($alias . '.connecteur_sis');
            $criteria->addSelectColumn($alias . '.connecteur_marco');
            $criteria->addSelectColumn($alias . '.repondre_aux_questions');
            $criteria->addSelectColumn($alias . '.appel_projet_formation');
            $criteria->addSelectColumn($alias . '.utiliser_client_CAO');
            $criteria->addSelectColumn($alias . '.notification_boamp');
            $criteria->addSelectColumn($alias . '.administrer_compte');
            $criteria->addSelectColumn($alias . '.gestion_mapa');
            $criteria->addSelectColumn($alias . '.gestion_type_validation');
            $criteria->addSelectColumn($alias . '.approuver_consultation');
            $criteria->addSelectColumn($alias . '.administrer_procedure');
            $criteria->addSelectColumn($alias . '.restreindre_creation');
            $criteria->addSelectColumn($alias . '.creer_liste_marches');
            $criteria->addSelectColumn($alias . '.gestion_commissions');
            $criteria->addSelectColumn($alias . '.suivi_seul_consultation');
            $criteria->addSelectColumn($alias . '.attribution_marche');
            $criteria->addSelectColumn($alias . '.fiche_recensement');
            $criteria->addSelectColumn($alias . '.declarer_infructueux');
            $criteria->addSelectColumn($alias . '.declarer_sans_suite');
            $criteria->addSelectColumn($alias . '.creer_consultation_transverse');
            $criteria->addSelectColumn($alias . '.ouvrir_candidature_en_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_candidature_a_distance');
            $criteria->addSelectColumn($alias . '.refuser_enveloppe');
            $criteria->addSelectColumn($alias . '.gerer_admissibilite');
            $criteria->addSelectColumn($alias . '.restaurer_enveloppe');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_en_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_anonymat_en_ligne');
            $criteria->addSelectColumn($alias . '.gestion_compte_boamp');
            $criteria->addSelectColumn($alias . '.gestion_agents');
            $criteria->addSelectColumn($alias . '.gestion_habilitations');
            $criteria->addSelectColumn($alias . '.gerer_mapa_inferieur_montant');
            $criteria->addSelectColumn($alias . '.gerer_mapa_superieur_montant');
            $criteria->addSelectColumn($alias . '.modifier_consultation_avant_validation');
            $criteria->addSelectColumn($alias . '.modifier_consultation_apres_validation');
            $criteria->addSelectColumn($alias . '.acces_reponses');
            $criteria->addSelectColumn($alias . '.telechargement_groupe_anticipe_plis_chiffres');
            $criteria->addSelectColumn($alias . '.telechargement_unitaire_plis_chiffres');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_a_distance');
            $criteria->addSelectColumn($alias . '.creer_annonce_information');
            $criteria->addSelectColumn($alias . '.saisie_marches');
            $criteria->addSelectColumn($alias . '.validation_marches');
            $criteria->addSelectColumn($alias . '.publication_marches');
            $criteria->addSelectColumn($alias . '.gerer_statistiques_metier');
            $criteria->addSelectColumn($alias . '.gerer_archives');
            $criteria->addSelectColumn($alias . '.administrer_procedures_formalisees');
            $criteria->addSelectColumn($alias . '.creer_annonce_attribution');
            $criteria->addSelectColumn($alias . '.acces_registre_retraits_electronique');
            $criteria->addSelectColumn($alias . '.acces_registre_questions_electronique');
            $criteria->addSelectColumn($alias . '.acces_registre_depots_electronique');
            $criteria->addSelectColumn($alias . '.validation_simple');
            $criteria->addSelectColumn($alias . '.validation_intermediaire');
            $criteria->addSelectColumn($alias . '.validation_finale');
            $criteria->addSelectColumn($alias . '.creer_suite_consultation');
            $criteria->addSelectColumn($alias . '.hyper_admin');
            $criteria->addSelectColumn($alias . '.droit_gestion_services');
            $criteria->addSelectColumn($alias . '.suivi_acces');
            $criteria->addSelectColumn($alias . '.statistiques_site');
            $criteria->addSelectColumn($alias . '.statistiques_QoS');
            $criteria->addSelectColumn($alias . '.ouvrir_anonymat_a_distance');
            $criteria->addSelectColumn($alias . '.gestion_compte_jal');
            $criteria->addSelectColumn($alias . '.gestion_centrale_pub');
            $criteria->addSelectColumn($alias . '.Gestion_Compte_Groupe_Moniteur');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_technique_en_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_technique_a_distance');
            $criteria->addSelectColumn($alias . '.activation_compte_entreprise');
            $criteria->addSelectColumn($alias . '.importer_enveloppe');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_depots_papier');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_retraits_papier');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_questions_papier');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_depots_electronique');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_retraits_electronique');
            $criteria->addSelectColumn($alias . '.suivi_seul_registre_questions_electronique');
            $criteria->addSelectColumn($alias . '.modifier_consultation_mapa_inferieur_montant_apres_validation');
            $criteria->addSelectColumn($alias . '.modifier_consultation_mapa_superieur_montant_apres_validation');
            $criteria->addSelectColumn($alias . '.modifier_consultation_procedures_formalisees_apres_validation');
            $criteria->addSelectColumn($alias . '.gerer_les_entreprises');
            $criteria->addSelectColumn($alias . '.portee_societes_exclues');
            $criteria->addSelectColumn($alias . '.portee_societes_exclues_tous_organismes');
            $criteria->addSelectColumn($alias . '.modifier_societes_exclues');
            $criteria->addSelectColumn($alias . '.supprimer_societes_exclues');
            $criteria->addSelectColumn($alias . '.resultat_analyse');
            $criteria->addSelectColumn($alias . '.gerer_adresses_service');
            $criteria->addSelectColumn($alias . '.gerer_mon_service');
            $criteria->addSelectColumn($alias . '.download_archives');
            $criteria->addSelectColumn($alias . '.creer_annonce_extrait_pv');
            $criteria->addSelectColumn($alias . '.creer_annonce_rapport_achevement');
            $criteria->addSelectColumn($alias . '.gestion_certificats_agent');
            $criteria->addSelectColumn($alias . '.creer_avis_programme_previsionnel');
            $criteria->addSelectColumn($alias . '.annuler_consultation');
            $criteria->addSelectColumn($alias . '.envoyer_publicite');
            $criteria->addSelectColumn($alias . '.liste_marches_notifies');
            $criteria->addSelectColumn($alias . '.suivre_message');
            $criteria->addSelectColumn($alias . '.envoyer_message');
            $criteria->addSelectColumn($alias . '.suivi_flux_chorus_transversal');
            $criteria->addSelectColumn($alias . '.gestion_mandataire');
            $criteria->addSelectColumn($alias . '.gerer_newsletter');
            $criteria->addSelectColumn($alias . '.gestion_modeles_formulaire');
            $criteria->addSelectColumn($alias . '.gestion_adresses_facturation_jal');
            $criteria->addSelectColumn($alias . '.administrer_adresses_facturation_jal');
            $criteria->addSelectColumn($alias . '.redaction_documents_redac');
            $criteria->addSelectColumn($alias . '.validation_documents_redac');
            $criteria->addSelectColumn($alias . '.gestion_mise_disposition_pieces_marche');
            $criteria->addSelectColumn($alias . '.annuaire_acheteur');
            $criteria->addSelectColumn($alias . '.reprendre_integralement_article');
            $criteria->addSelectColumn($alias . '.administrer_clauses');
            $criteria->addSelectColumn($alias . '.valider_clauses');
            $criteria->addSelectColumn($alias . '.administrer_canevas');
            $criteria->addSelectColumn($alias . '.valider_canevas');
            $criteria->addSelectColumn($alias . '.administrer_clauses_entite_achats');
            $criteria->addSelectColumn($alias . '.generer_pieces_format_odt');
            $criteria->addSelectColumn($alias . '.publier_version_clausier_editeur');
            $criteria->addSelectColumn($alias . '.administrer_clauses_editeur');
            $criteria->addSelectColumn($alias . '.valider_clauses_editeur');
            $criteria->addSelectColumn($alias . '.administrer_canevas_editeur');
            $criteria->addSelectColumn($alias . '.valider_canevas_editeur');
            $criteria->addSelectColumn($alias . '.decision_suivi_seul');
            $criteria->addSelectColumn($alias . '.ouvrir_candidature_hors_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_hors_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_technique_hors_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_anonymat_hors_ligne');
            $criteria->addSelectColumn($alias . '.espace_collaboratif_gestionnaire');
            $criteria->addSelectColumn($alias . '.espace_collaboratif_contributeur');
            $criteria->addSelectColumn($alias . '.gerer_organismes');
            $criteria->addSelectColumn($alias . '.gerer_associations_agents');
            $criteria->addSelectColumn($alias . '.module_redaction_uniquement');
            $criteria->addSelectColumn($alias . '.historique_navigation_inscrits');
            $criteria->addSelectColumn($alias . '.telecharger_accords_cadres');
            $criteria->addSelectColumn($alias . '.creer_annonce_decision_resiliation');
            $criteria->addSelectColumn($alias . '.creer_annonce_synthese_rapport_audit');
            $criteria->addSelectColumn($alias . '.gerer_operations');
            $criteria->addSelectColumn($alias . '.telecharger_siret_acheteur');
            $criteria->addSelectColumn($alias . '.gerer_reouvertures_modification');
            $criteria->addSelectColumn($alias . '.envoyer_demande_validation');
            $criteria->addSelectColumn($alias . '.suivre_consultation_organisme');
            $criteria->addSelectColumn($alias . '.renseigner_montant');
            $criteria->addSelectColumn($alias . '.gestion_referentiel_contact');
            $criteria->addSelectColumn($alias . '.validation_acces_facture');
            $criteria->addSelectColumn($alias . '.gerer_cao');
            $criteria->addSelectColumn($alias . '.gestion_travaux_cao');
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
        $criteria->setPrimaryTableName(CommonHabilitationProfilPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHabilitationProfilPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonHabilitationProfilPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHabilitationProfil
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonHabilitationProfilPeer::doSelect($critcopy, $con);
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
        return CommonHabilitationProfilPeer::populateObjects(CommonHabilitationProfilPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonHabilitationProfilPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationProfilPeer::DATABASE_NAME);

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
     * @param      CommonHabilitationProfil $obj A CommonHabilitationProfil object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonHabilitationProfilPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonHabilitationProfil object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonHabilitationProfil) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonHabilitationProfil object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonHabilitationProfilPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonHabilitationProfil Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonHabilitationProfilPeer::$instances[$key])) {
                return CommonHabilitationProfilPeer::$instances[$key];
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
        foreach (CommonHabilitationProfilPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonHabilitationProfilPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to HabilitationProfil
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
        $cls = CommonHabilitationProfilPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonHabilitationProfilPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonHabilitationProfilPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonHabilitationProfilPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonHabilitationProfil object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonHabilitationProfilPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonHabilitationProfilPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonHabilitationProfilPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonHabilitationProfilPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonHabilitationProfilPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonHabilitationProfilPeer::DATABASE_NAME)->getTable(CommonHabilitationProfilPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonHabilitationProfilPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonHabilitationProfilPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonHabilitationProfilTableMap());
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
        return CommonHabilitationProfilPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonHabilitationProfil or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHabilitationProfil object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonHabilitationProfil object
        }

        if ($criteria->containsKey(CommonHabilitationProfilPeer::ID) && $criteria->keyContainsValue(CommonHabilitationProfilPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonHabilitationProfilPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationProfilPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonHabilitationProfil or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHabilitationProfil object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonHabilitationProfilPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonHabilitationProfilPeer::ID);
            $value = $criteria->remove(CommonHabilitationProfilPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonHabilitationProfilPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHabilitationProfilPeer::TABLE_NAME);
            }

        } else { // $values is CommonHabilitationProfil object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonHabilitationProfilPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the HabilitationProfil table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonHabilitationProfilPeer::TABLE_NAME, $con, CommonHabilitationProfilPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonHabilitationProfilPeer::clearInstancePool();
            CommonHabilitationProfilPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonHabilitationProfil or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonHabilitationProfil object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonHabilitationProfilPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonHabilitationProfil) { // it's a model object
            // invalidate the cache for this single object
            CommonHabilitationProfilPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonHabilitationProfilPeer::DATABASE_NAME);
            $criteria->add(CommonHabilitationProfilPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonHabilitationProfilPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationProfilPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonHabilitationProfilPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonHabilitationProfil object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonHabilitationProfil $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonHabilitationProfilPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonHabilitationProfilPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonHabilitationProfilPeer::DATABASE_NAME, CommonHabilitationProfilPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonHabilitationProfil
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonHabilitationProfilPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonHabilitationProfilPeer::DATABASE_NAME);
        $criteria->add(CommonHabilitationProfilPeer::ID, $pk);

        $v = CommonHabilitationProfilPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonHabilitationProfil[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationProfilPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonHabilitationProfilPeer::DATABASE_NAME);
            $criteria->add(CommonHabilitationProfilPeer::ID, $pks, Criteria::IN);
            $objs = CommonHabilitationProfilPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonHabilitationProfilPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonHabilitationProfilPeer::buildTableMap();

