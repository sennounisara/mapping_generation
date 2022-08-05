<?php


/**
 * Base static class for performing query and update operations on the 'HabilitationAgent' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonHabilitationAgentPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'HabilitationAgent';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonHabilitationAgent';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonHabilitationAgentTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 162;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 162;

    /** the column name for the id_agent field */
    const ID_AGENT = 'HabilitationAgent.id_agent';

    /** the column name for the gestion_agent_pole field */
    const GESTION_AGENT_POLE = 'HabilitationAgent.gestion_agent_pole';

    /** the column name for the gestion_fournisseurs_envois_postaux field */
    const GESTION_FOURNISSEURS_ENVOIS_POSTAUX = 'HabilitationAgent.gestion_fournisseurs_envois_postaux';

    /** the column name for the gestion_bi_cles field */
    const GESTION_BI_CLES = 'HabilitationAgent.gestion_bi_cles';

    /** the column name for the creer_consultation field */
    const CREER_CONSULTATION = 'HabilitationAgent.creer_consultation';

    /** the column name for the modifier_consultation field */
    const MODIFIER_CONSULTATION = 'HabilitationAgent.modifier_consultation';

    /** the column name for the valider_consultation field */
    const VALIDER_CONSULTATION = 'HabilitationAgent.valider_consultation';

    /** the column name for the publier_consultation field */
    const PUBLIER_CONSULTATION = 'HabilitationAgent.publier_consultation';

    /** the column name for the suivre_consultation field */
    const SUIVRE_CONSULTATION = 'HabilitationAgent.suivre_consultation';

    /** the column name for the suivre_consultation_pole field */
    const SUIVRE_CONSULTATION_POLE = 'HabilitationAgent.suivre_consultation_pole';

    /** the column name for the supprimer_enveloppe field */
    const SUPPRIMER_ENVELOPPE = 'HabilitationAgent.supprimer_enveloppe';

    /** the column name for the supprimer_consultation field */
    const SUPPRIMER_CONSULTATION = 'HabilitationAgent.supprimer_consultation';

    /** the column name for the depouiller_candidature field */
    const DEPOUILLER_CANDIDATURE = 'HabilitationAgent.depouiller_candidature';

    /** the column name for the depouiller_offre field */
    const DEPOUILLER_OFFRE = 'HabilitationAgent.depouiller_offre';

    /** the column name for the messagerie_securisee field */
    const MESSAGERIE_SECURISEE = 'HabilitationAgent.messagerie_securisee';

    /** the column name for the acces_registre_depots_papier field */
    const ACCES_REGISTRE_DEPOTS_PAPIER = 'HabilitationAgent.acces_registre_depots_papier';

    /** the column name for the acces_registre_retraits_papier field */
    const ACCES_REGISTRE_RETRAITS_PAPIER = 'HabilitationAgent.acces_registre_retraits_papier';

    /** the column name for the acces_registre_questions_papier field */
    const ACCES_REGISTRE_QUESTIONS_PAPIER = 'HabilitationAgent.acces_registre_questions_papier';

    /** the column name for the gerer_encheres field */
    const GERER_ENCHERES = 'HabilitationAgent.gerer_encheres';

    /** the column name for the suivre_encheres field */
    const SUIVRE_ENCHERES = 'HabilitationAgent.suivre_encheres';

    /** the column name for the suivi_entreprise field */
    const SUIVI_ENTREPRISE = 'HabilitationAgent.suivi_entreprise';

    /** the column name for the envoi_boamp field */
    const ENVOI_BOAMP = 'HabilitationAgent.envoi_boamp';

    /** the column name for the acces_classement_lot field */
    const ACCES_CLASSEMENT_LOT = 'HabilitationAgent.acces_classement_lot';

    /** the column name for the connecteur_sis field */
    const CONNECTEUR_SIS = 'HabilitationAgent.connecteur_sis';

    /** the column name for the connecteur_marco field */
    const CONNECTEUR_MARCO = 'HabilitationAgent.connecteur_marco';

    /** the column name for the repondre_aux_questions field */
    const REPONDRE_AUX_QUESTIONS = 'HabilitationAgent.repondre_aux_questions';

    /** the column name for the appel_projet_formation field */
    const APPEL_PROJET_FORMATION = 'HabilitationAgent.appel_projet_formation';

    /** the column name for the utiliser_client_CAO field */
    const UTILISER_CLIENT_CAO = 'HabilitationAgent.utiliser_client_CAO';

    /** the column name for the notification_boamp field */
    const NOTIFICATION_BOAMP = 'HabilitationAgent.notification_boamp';

    /** the column name for the administrer_compte field */
    const ADMINISTRER_COMPTE = 'HabilitationAgent.administrer_compte';

    /** the column name for the gestion_mapa field */
    const GESTION_MAPA = 'HabilitationAgent.gestion_mapa';

    /** the column name for the gestion_type_validation field */
    const GESTION_TYPE_VALIDATION = 'HabilitationAgent.gestion_type_validation';

    /** the column name for the approuver_consultation field */
    const APPROUVER_CONSULTATION = 'HabilitationAgent.approuver_consultation';

    /** the column name for the administrer_procedure field */
    const ADMINISTRER_PROCEDURE = 'HabilitationAgent.administrer_procedure';

    /** the column name for the restreindre_creation field */
    const RESTREINDRE_CREATION = 'HabilitationAgent.restreindre_creation';

    /** the column name for the creer_liste_marches field */
    const CREER_LISTE_MARCHES = 'HabilitationAgent.creer_liste_marches';

    /** the column name for the gestion_commissions field */
    const GESTION_COMMISSIONS = 'HabilitationAgent.gestion_commissions';

    /** the column name for the suivi_seul_consultation field */
    const SUIVI_SEUL_CONSULTATION = 'HabilitationAgent.suivi_seul_consultation';

    /** the column name for the attribution_marche field */
    const ATTRIBUTION_MARCHE = 'HabilitationAgent.attribution_marche';

    /** the column name for the fiche_recensement field */
    const FICHE_RECENSEMENT = 'HabilitationAgent.fiche_recensement';

    /** the column name for the declarer_infructueux field */
    const DECLARER_INFRUCTUEUX = 'HabilitationAgent.declarer_infructueux';

    /** the column name for the declarer_sans_suite field */
    const DECLARER_SANS_SUITE = 'HabilitationAgent.declarer_sans_suite';

    /** the column name for the creer_consultation_transverse field */
    const CREER_CONSULTATION_TRANSVERSE = 'HabilitationAgent.creer_consultation_transverse';

    /** the column name for the ouvrir_candidature_en_ligne field */
    const OUVRIR_CANDIDATURE_EN_LIGNE = 'HabilitationAgent.ouvrir_candidature_en_ligne';

    /** the column name for the ouvrir_candidature_a_distance field */
    const OUVRIR_CANDIDATURE_A_DISTANCE = 'HabilitationAgent.ouvrir_candidature_a_distance';

    /** the column name for the refuser_enveloppe field */
    const REFUSER_ENVELOPPE = 'HabilitationAgent.refuser_enveloppe';

    /** the column name for the gerer_admissibilite field */
    const GERER_ADMISSIBILITE = 'HabilitationAgent.gerer_admissibilite';

    /** the column name for the restaurer_enveloppe field */
    const RESTAURER_ENVELOPPE = 'HabilitationAgent.restaurer_enveloppe';

    /** the column name for the ouvrir_anonymat_en_ligne field */
    const OUVRIR_ANONYMAT_EN_LIGNE = 'HabilitationAgent.ouvrir_anonymat_en_ligne';

    /** the column name for the ouvrir_offre_en_ligne field */
    const OUVRIR_OFFRE_EN_LIGNE = 'HabilitationAgent.ouvrir_offre_en_ligne';

    /** the column name for the gestion_compte_boamp field */
    const GESTION_COMPTE_BOAMP = 'HabilitationAgent.gestion_compte_boamp';

    /** the column name for the gestion_agents field */
    const GESTION_AGENTS = 'HabilitationAgent.gestion_agents';

    /** the column name for the gestion_habilitations field */
    const GESTION_HABILITATIONS = 'HabilitationAgent.gestion_habilitations';

    /** the column name for the gerer_mapa_inferieur_montant field */
    const GERER_MAPA_INFERIEUR_MONTANT = 'HabilitationAgent.gerer_mapa_inferieur_montant';

    /** the column name for the gerer_mapa_superieur_montant field */
    const GERER_MAPA_SUPERIEUR_MONTANT = 'HabilitationAgent.gerer_mapa_superieur_montant';

    /** the column name for the modifier_consultation_avant_validation field */
    const MODIFIER_CONSULTATION_AVANT_VALIDATION = 'HabilitationAgent.modifier_consultation_avant_validation';

    /** the column name for the modifier_consultation_apres_validation field */
    const MODIFIER_CONSULTATION_APRES_VALIDATION = 'HabilitationAgent.modifier_consultation_apres_validation';

    /** the column name for the acces_reponses field */
    const ACCES_REPONSES = 'HabilitationAgent.acces_reponses';

    /** the column name for the telechargement_groupe_anticipe_plis_chiffres field */
    const TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES = 'HabilitationAgent.telechargement_groupe_anticipe_plis_chiffres';

    /** the column name for the telechargement_unitaire_plis_chiffres field */
    const TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES = 'HabilitationAgent.telechargement_unitaire_plis_chiffres';

    /** the column name for the ouvrir_offre_a_distance field */
    const OUVRIR_OFFRE_A_DISTANCE = 'HabilitationAgent.ouvrir_offre_a_distance';

    /** the column name for the creer_annonce_information field */
    const CREER_ANNONCE_INFORMATION = 'HabilitationAgent.creer_annonce_information';

    /** the column name for the saisie_marches field */
    const SAISIE_MARCHES = 'HabilitationAgent.saisie_marches';

    /** the column name for the validation_marches field */
    const VALIDATION_MARCHES = 'HabilitationAgent.validation_marches';

    /** the column name for the publication_marches field */
    const PUBLICATION_MARCHES = 'HabilitationAgent.publication_marches';

    /** the column name for the gerer_statistiques_metier field */
    const GERER_STATISTIQUES_METIER = 'HabilitationAgent.gerer_statistiques_metier';

    /** the column name for the gerer_archives field */
    const GERER_ARCHIVES = 'HabilitationAgent.gerer_archives';

    /** the column name for the administrer_procedures_formalisees field */
    const ADMINISTRER_PROCEDURES_FORMALISEES = 'HabilitationAgent.administrer_procedures_formalisees';

    /** the column name for the creer_annonce_attribution field */
    const CREER_ANNONCE_ATTRIBUTION = 'HabilitationAgent.creer_annonce_attribution';

    /** the column name for the acces_registre_retraits_electronique field */
    const ACCES_REGISTRE_RETRAITS_ELECTRONIQUE = 'HabilitationAgent.acces_registre_retraits_electronique';

    /** the column name for the acces_registre_questions_electronique field */
    const ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE = 'HabilitationAgent.acces_registre_questions_electronique';

    /** the column name for the acces_registre_depots_electronique field */
    const ACCES_REGISTRE_DEPOTS_ELECTRONIQUE = 'HabilitationAgent.acces_registre_depots_electronique';

    /** the column name for the validation_simple field */
    const VALIDATION_SIMPLE = 'HabilitationAgent.validation_simple';

    /** the column name for the validation_intermediaire field */
    const VALIDATION_INTERMEDIAIRE = 'HabilitationAgent.validation_intermediaire';

    /** the column name for the validation_finale field */
    const VALIDATION_FINALE = 'HabilitationAgent.validation_finale';

    /** the column name for the creer_suite_consultation field */
    const CREER_SUITE_CONSULTATION = 'HabilitationAgent.creer_suite_consultation';

    /** the column name for the hyper_admin field */
    const HYPER_ADMIN = 'HabilitationAgent.hyper_admin';

    /** the column name for the droit_gestion_services field */
    const DROIT_GESTION_SERVICES = 'HabilitationAgent.droit_gestion_services';

    /** the column name for the suivi_acces field */
    const SUIVI_ACCES = 'HabilitationAgent.suivi_acces';

    /** the column name for the statistiques_site field */
    const STATISTIQUES_SITE = 'HabilitationAgent.statistiques_site';

    /** the column name for the statistiques_QoS field */
    const STATISTIQUES_QOS = 'HabilitationAgent.statistiques_QoS';

    /** the column name for the ouvrir_anonymat_a_distance field */
    const OUVRIR_ANONYMAT_A_DISTANCE = 'HabilitationAgent.ouvrir_anonymat_a_distance';

    /** the column name for the gestion_compte_jal field */
    const GESTION_COMPTE_JAL = 'HabilitationAgent.gestion_compte_jal';

    /** the column name for the gestion_centrale_pub field */
    const GESTION_CENTRALE_PUB = 'HabilitationAgent.gestion_centrale_pub';

    /** the column name for the Gestion_Compte_Groupe_Moniteur field */
    const GESTION_COMPTE_GROUPE_MONITEUR = 'HabilitationAgent.Gestion_Compte_Groupe_Moniteur';

    /** the column name for the ouvrir_offre_technique_en_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE = 'HabilitationAgent.ouvrir_offre_technique_en_ligne';

    /** the column name for the ouvrir_offre_technique_a_distance field */
    const OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE = 'HabilitationAgent.ouvrir_offre_technique_a_distance';

    /** the column name for the activation_compte_entreprise field */
    const ACTIVATION_COMPTE_ENTREPRISE = 'HabilitationAgent.activation_compte_entreprise';

    /** the column name for the importer_enveloppe field */
    const IMPORTER_ENVELOPPE = 'HabilitationAgent.importer_enveloppe';

    /** the column name for the suivi_seul_registre_depots_papier field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER = 'HabilitationAgent.suivi_seul_registre_depots_papier';

    /** the column name for the suivi_seul_registre_retraits_papier field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER = 'HabilitationAgent.suivi_seul_registre_retraits_papier';

    /** the column name for the suivi_seul_registre_questions_papier field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER = 'HabilitationAgent.suivi_seul_registre_questions_papier';

    /** the column name for the suivi_seul_registre_depots_electronique field */
    const SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE = 'HabilitationAgent.suivi_seul_registre_depots_electronique';

    /** the column name for the suivi_seul_registre_retraits_electronique field */
    const SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE = 'HabilitationAgent.suivi_seul_registre_retraits_electronique';

    /** the column name for the suivi_seul_registre_questions_electronique field */
    const SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE = 'HabilitationAgent.suivi_seul_registre_questions_electronique';

    /** the column name for the modifier_consultation_mapa_inferieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION = 'HabilitationAgent.modifier_consultation_mapa_inferieur_montant_apres_validation';

    /** the column name for the modifier_consultation_mapa_superieur_montant_apres_validation field */
    const MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION = 'HabilitationAgent.modifier_consultation_mapa_superieur_montant_apres_validation';

    /** the column name for the modifier_consultation_procedures_formalisees_apres_validation field */
    const MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION = 'HabilitationAgent.modifier_consultation_procedures_formalisees_apres_validation';

    /** the column name for the gerer_les_entreprises field */
    const GERER_LES_ENTREPRISES = 'HabilitationAgent.gerer_les_entreprises';

    /** the column name for the portee_societes_exclues field */
    const PORTEE_SOCIETES_EXCLUES = 'HabilitationAgent.portee_societes_exclues';

    /** the column name for the portee_societes_exclues_tous_organismes field */
    const PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES = 'HabilitationAgent.portee_societes_exclues_tous_organismes';

    /** the column name for the modifier_societes_exclues field */
    const MODIFIER_SOCIETES_EXCLUES = 'HabilitationAgent.modifier_societes_exclues';

    /** the column name for the supprimer_societes_exclues field */
    const SUPPRIMER_SOCIETES_EXCLUES = 'HabilitationAgent.supprimer_societes_exclues';

    /** the column name for the resultat_analyse field */
    const RESULTAT_ANALYSE = 'HabilitationAgent.resultat_analyse';

    /** the column name for the gerer_adresses_service field */
    const GERER_ADRESSES_SERVICE = 'HabilitationAgent.gerer_adresses_service';

    /** the column name for the gerer_mon_service field */
    const GERER_MON_SERVICE = 'HabilitationAgent.gerer_mon_service';

    /** the column name for the download_archives field */
    const DOWNLOAD_ARCHIVES = 'HabilitationAgent.download_archives';

    /** the column name for the creer_annonce_extrait_pv field */
    const CREER_ANNONCE_EXTRAIT_PV = 'HabilitationAgent.creer_annonce_extrait_pv';

    /** the column name for the creer_annonce_rapport_achevement field */
    const CREER_ANNONCE_RAPPORT_ACHEVEMENT = 'HabilitationAgent.creer_annonce_rapport_achevement';

    /** the column name for the gestion_certificats_agent field */
    const GESTION_CERTIFICATS_AGENT = 'HabilitationAgent.gestion_certificats_agent';

    /** the column name for the creer_avis_programme_previsionnel field */
    const CREER_AVIS_PROGRAMME_PREVISIONNEL = 'HabilitationAgent.creer_avis_programme_previsionnel';

    /** the column name for the annuler_consultation field */
    const ANNULER_CONSULTATION = 'HabilitationAgent.annuler_consultation';

    /** the column name for the envoyer_publicite field */
    const ENVOYER_PUBLICITE = 'HabilitationAgent.envoyer_publicite';

    /** the column name for the liste_marches_notifies field */
    const LISTE_MARCHES_NOTIFIES = 'HabilitationAgent.liste_marches_notifies';

    /** the column name for the suivre_message field */
    const SUIVRE_MESSAGE = 'HabilitationAgent.suivre_message';

    /** the column name for the envoyer_message field */
    const ENVOYER_MESSAGE = 'HabilitationAgent.envoyer_message';

    /** the column name for the suivi_flux_chorus_transversal field */
    const SUIVI_FLUX_CHORUS_TRANSVERSAL = 'HabilitationAgent.suivi_flux_chorus_transversal';

    /** the column name for the gestion_mandataire field */
    const GESTION_MANDATAIRE = 'HabilitationAgent.gestion_mandataire';

    /** the column name for the gerer_newsletter field */
    const GERER_NEWSLETTER = 'HabilitationAgent.gerer_newsletter';

    /** the column name for the gestion_modeles_formulaire field */
    const GESTION_MODELES_FORMULAIRE = 'HabilitationAgent.gestion_modeles_formulaire';

    /** the column name for the gestion_adresses_facturation_jal field */
    const GESTION_ADRESSES_FACTURATION_JAL = 'HabilitationAgent.gestion_adresses_facturation_jal';

    /** the column name for the administrer_adresses_facturation_jal field */
    const ADMINISTRER_ADRESSES_FACTURATION_JAL = 'HabilitationAgent.administrer_adresses_facturation_jal';

    /** the column name for the redaction_documents_redac field */
    const REDACTION_DOCUMENTS_REDAC = 'HabilitationAgent.redaction_documents_redac';

    /** the column name for the validation_documents_redac field */
    const VALIDATION_DOCUMENTS_REDAC = 'HabilitationAgent.validation_documents_redac';

    /** the column name for the gestion_mise_disposition_pieces_marche field */
    const GESTION_MISE_DISPOSITION_PIECES_MARCHE = 'HabilitationAgent.gestion_mise_disposition_pieces_marche';

    /** the column name for the annuaire_acheteur field */
    const ANNUAIRE_ACHETEUR = 'HabilitationAgent.annuaire_acheteur';

    /** the column name for the reprendre_integralement_article field */
    const REPRENDRE_INTEGRALEMENT_ARTICLE = 'HabilitationAgent.reprendre_integralement_article';

    /** the column name for the administrer_clauses field */
    const ADMINISTRER_CLAUSES = 'HabilitationAgent.administrer_clauses';

    /** the column name for the valider_clauses field */
    const VALIDER_CLAUSES = 'HabilitationAgent.valider_clauses';

    /** the column name for the administrer_canevas field */
    const ADMINISTRER_CANEVAS = 'HabilitationAgent.administrer_canevas';

    /** the column name for the valider_canevas field */
    const VALIDER_CANEVAS = 'HabilitationAgent.valider_canevas';

    /** the column name for the administrer_clauses_entite_achats field */
    const ADMINISTRER_CLAUSES_ENTITE_ACHATS = 'HabilitationAgent.administrer_clauses_entite_achats';

    /** the column name for the generer_pieces_format_odt field */
    const GENERER_PIECES_FORMAT_ODT = 'HabilitationAgent.generer_pieces_format_odt';

    /** the column name for the publier_version_clausier_editeur field */
    const PUBLIER_VERSION_CLAUSIER_EDITEUR = 'HabilitationAgent.publier_version_clausier_editeur';

    /** the column name for the administrer_clauses_editeur field */
    const ADMINISTRER_CLAUSES_EDITEUR = 'HabilitationAgent.administrer_clauses_editeur';

    /** the column name for the valider_clauses_editeur field */
    const VALIDER_CLAUSES_EDITEUR = 'HabilitationAgent.valider_clauses_editeur';

    /** the column name for the administrer_canevas_editeur field */
    const ADMINISTRER_CANEVAS_EDITEUR = 'HabilitationAgent.administrer_canevas_editeur';

    /** the column name for the valider_canevas_editeur field */
    const VALIDER_CANEVAS_EDITEUR = 'HabilitationAgent.valider_canevas_editeur';

    /** the column name for the decision_suivi_seul field */
    const DECISION_SUIVI_SEUL = 'HabilitationAgent.decision_suivi_seul';

    /** the column name for the ouvrir_candidature_hors_ligne field */
    const OUVRIR_CANDIDATURE_HORS_LIGNE = 'HabilitationAgent.ouvrir_candidature_hors_ligne';

    /** the column name for the ouvrir_offre_hors_ligne field */
    const OUVRIR_OFFRE_HORS_LIGNE = 'HabilitationAgent.ouvrir_offre_hors_ligne';

    /** the column name for the ouvrir_offre_technique_hors_ligne field */
    const OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE = 'HabilitationAgent.ouvrir_offre_technique_hors_ligne';

    /** the column name for the ouvrir_anonymat_hors_ligne field */
    const OUVRIR_ANONYMAT_HORS_LIGNE = 'HabilitationAgent.ouvrir_anonymat_hors_ligne';

    /** the column name for the espace_collaboratif_gestionnaire field */
    const ESPACE_COLLABORATIF_GESTIONNAIRE = 'HabilitationAgent.espace_collaboratif_gestionnaire';

    /** the column name for the espace_collaboratif_contributeur field */
    const ESPACE_COLLABORATIF_CONTRIBUTEUR = 'HabilitationAgent.espace_collaboratif_contributeur';

    /** the column name for the gerer_organismes field */
    const GERER_ORGANISMES = 'HabilitationAgent.gerer_organismes';

    /** the column name for the gerer_associations_agents field */
    const GERER_ASSOCIATIONS_AGENTS = 'HabilitationAgent.gerer_associations_agents';

    /** the column name for the module_redaction_uniquement field */
    const MODULE_REDACTION_UNIQUEMENT = 'HabilitationAgent.module_redaction_uniquement';

    /** the column name for the historique_navigation_inscrits field */
    const HISTORIQUE_NAVIGATION_INSCRITS = 'HabilitationAgent.historique_navigation_inscrits';

    /** the column name for the telecharger_accords_cadres field */
    const TELECHARGER_ACCORDS_CADRES = 'HabilitationAgent.telecharger_accords_cadres';

    /** the column name for the creer_annonce_decision_resiliation field */
    const CREER_ANNONCE_DECISION_RESILIATION = 'HabilitationAgent.creer_annonce_decision_resiliation';

    /** the column name for the creer_annonce_synthese_rapport_audit field */
    const CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT = 'HabilitationAgent.creer_annonce_synthese_rapport_audit';

    /** the column name for the gerer_operations field */
    const GERER_OPERATIONS = 'HabilitationAgent.gerer_operations';

    /** the column name for the telecharger_siret_acheteur field */
    const TELECHARGER_SIRET_ACHETEUR = 'HabilitationAgent.telecharger_siret_acheteur';

    /** the column name for the gerer_reouvertures_modification field */
    const GERER_REOUVERTURES_MODIFICATION = 'HabilitationAgent.gerer_reouvertures_modification';

    /** the column name for the envoyer_demande_validation field */
    const ENVOYER_DEMANDE_VALIDATION = 'HabilitationAgent.envoyer_demande_validation';

    /** the column name for the suivre_consultation_organisme field */
    const SUIVRE_CONSULTATION_ORGANISME = 'HabilitationAgent.suivre_consultation_organisme';

    /** the column name for the renseigner_montant field */
    const RENSEIGNER_MONTANT = 'HabilitationAgent.renseigner_montant';

    /** the column name for the gestion_referentiel_contact field */
    const GESTION_REFERENTIEL_CONTACT = 'HabilitationAgent.gestion_referentiel_contact';

    /** the column name for the gerer_cao field */
    const GERER_CAO = 'HabilitationAgent.gerer_cao';

    /** the column name for the validation_acces_facture field */
    const VALIDATION_ACCES_FACTURE = 'HabilitationAgent.validation_acces_facture';

    /** the column name for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO = 'HabilitationAgent.gestion_travaux_cao';

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

    /** The enumerated values for the ouvrir_anonymat_en_ligne field */
    const OUVRIR_ANONYMAT_EN_LIGNE_0 = '0';
    const OUVRIR_ANONYMAT_EN_LIGNE_1 = '1';

    /** The enumerated values for the ouvrir_offre_en_ligne field */
    const OUVRIR_OFFRE_EN_LIGNE_0 = '0';
    const OUVRIR_OFFRE_EN_LIGNE_1 = '1';

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

    /** The enumerated values for the gerer_cao field */
    const GERER_CAO_0 = '0';
    const GERER_CAO_1 = '1';

    /** The enumerated values for the validation_acces_facture field */
    const VALIDATION_ACCES_FACTURE_0 = '0';
    const VALIDATION_ACCES_FACTURE_1 = '1';

    /** The enumerated values for the gestion_travaux_cao field */
    const GESTION_TRAVAUX_CAO_0 = '0';
    const GESTION_TRAVAUX_CAO_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonHabilitationAgent objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonHabilitationAgent[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonHabilitationAgentPeer::$fieldNames[CommonHabilitationAgentPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdAgent', 'GestionAgentPole', 'GestionFournisseursEnvoisPostaux', 'GestionBiCles', 'CreerConsultation', 'ModifierConsultation', 'ValiderConsultation', 'PublierConsultation', 'SuivreConsultation', 'SuivreConsultationPole', 'SupprimerEnveloppe', 'SupprimerConsultation', 'DepouillerCandidature', 'DepouillerOffre', 'MessagerieSecurisee', 'AccesRegistreDepotsPapier', 'AccesRegistreRetraitsPapier', 'AccesRegistreQuestionsPapier', 'GererEncheres', 'SuivreEncheres', 'SuiviEntreprise', 'EnvoiBoamp', 'AccesClassementLot', 'ConnecteurSis', 'ConnecteurMarco', 'RepondreAuxQuestions', 'AppelProjetFormation', 'UtiliserClientCao', 'NotificationBoamp', 'AdministrerCompte', 'GestionMapa', 'GestionTypeValidation', 'ApprouverConsultation', 'AdministrerProcedure', 'RestreindreCreation', 'CreerListeMarches', 'GestionCommissions', 'SuiviSeulConsultation', 'AttributionMarche', 'FicheRecensement', 'DeclarerInfructueux', 'DeclarerSansSuite', 'CreerConsultationTransverse', 'OuvrirCandidatureEnLigne', 'OuvrirCandidatureADistance', 'RefuserEnveloppe', 'GererAdmissibilite', 'RestaurerEnveloppe', 'OuvrirAnonymatEnLigne', 'OuvrirOffreEnLigne', 'GestionCompteBoamp', 'GestionAgents', 'GestionHabilitations', 'GererMapaInferieurMontant', 'GererMapaSuperieurMontant', 'ModifierConsultationAvantValidation', 'ModifierConsultationApresValidation', 'AccesReponses', 'TelechargementGroupeAnticipePlisChiffres', 'TelechargementUnitairePlisChiffres', 'OuvrirOffreADistance', 'CreerAnnonceInformation', 'SaisieMarches', 'ValidationMarches', 'PublicationMarches', 'GererStatistiquesMetier', 'GererArchives', 'AdministrerProceduresFormalisees', 'CreerAnnonceAttribution', 'AccesRegistreRetraitsElectronique', 'AccesRegistreQuestionsElectronique', 'AccesRegistreDepotsElectronique', 'ValidationSimple', 'ValidationIntermediaire', 'ValidationFinale', 'CreerSuiteConsultation', 'HyperAdmin', 'DroitGestionServices', 'SuiviAcces', 'StatistiquesSite', 'StatistiquesQos', 'OuvrirAnonymatADistance', 'GestionCompteJal', 'GestionCentralePub', 'GestionCompteGroupeMoniteur', 'OuvrirOffreTechniqueEnLigne', 'OuvrirOffreTechniqueADistance', 'ActivationCompteEntreprise', 'ImporterEnveloppe', 'SuiviSeulRegistreDepotsPapier', 'SuiviSeulRegistreRetraitsPapier', 'SuiviSeulRegistreQuestionsPapier', 'SuiviSeulRegistreDepotsElectronique', 'SuiviSeulRegistreRetraitsElectronique', 'SuiviSeulRegistreQuestionsElectronique', 'ModifierConsultationMapaInferieurMontantApresValidation', 'ModifierConsultationMapaSuperieurMontantApresValidation', 'ModifierConsultationProceduresFormaliseesApresValidation', 'GererLesEntreprises', 'PorteeSocietesExclues', 'PorteeSocietesExcluesTousOrganismes', 'ModifierSocietesExclues', 'SupprimerSocietesExclues', 'ResultatAnalyse', 'GererAdressesService', 'GererMonService', 'DownloadArchives', 'CreerAnnonceExtraitPv', 'CreerAnnonceRapportAchevement', 'GestionCertificatsAgent', 'CreerAvisProgrammePrevisionnel', 'AnnulerConsultation', 'EnvoyerPublicite', 'ListeMarchesNotifies', 'SuivreMessage', 'EnvoyerMessage', 'SuiviFluxChorusTransversal', 'GestionMandataire', 'GererNewsletter', 'GestionModelesFormulaire', 'GestionAdressesFacturationJal', 'AdministrerAdressesFacturationJal', 'RedactionDocumentsRedac', 'ValidationDocumentsRedac', 'GestionMiseDispositionPiecesMarche', 'AnnuaireAcheteur', 'ReprendreIntegralementArticle', 'AdministrerClauses', 'ValiderClauses', 'AdministrerCanevas', 'ValiderCanevas', 'AdministrerClausesEntiteAchats', 'GenererPiecesFormatOdt', 'PublierVersionClausierEditeur', 'AdministrerClausesEditeur', 'ValiderClausesEditeur', 'AdministrerCanevasEditeur', 'ValiderCanevasEditeur', 'DecisionSuiviSeul', 'OuvrirCandidatureHorsLigne', 'OuvrirOffreHorsLigne', 'OuvrirOffreTechniqueHorsLigne', 'OuvrirAnonymatHorsLigne', 'EspaceCollaboratifGestionnaire', 'EspaceCollaboratifContributeur', 'GererOrganismes', 'GererAssociationsAgents', 'ModuleRedactionUniquement', 'HistoriqueNavigationInscrits', 'TelechargerAccordsCadres', 'CreerAnnonceDecisionResiliation', 'CreerAnnonceSyntheseRapportAudit', 'GererOperations', 'TelechargerSiretAcheteur', 'GererReouverturesModification', 'EnvoyerDemandeValidation', 'SuivreConsultationOrganisme', 'RenseignerMontant', 'GestionReferentielContact', 'GererCao', 'ValidationAccesFacture', 'GestionTravauxCao', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAgent', 'gestionAgentPole', 'gestionFournisseursEnvoisPostaux', 'gestionBiCles', 'creerConsultation', 'modifierConsultation', 'validerConsultation', 'publierConsultation', 'suivreConsultation', 'suivreConsultationPole', 'supprimerEnveloppe', 'supprimerConsultation', 'depouillerCandidature', 'depouillerOffre', 'messagerieSecurisee', 'accesRegistreDepotsPapier', 'accesRegistreRetraitsPapier', 'accesRegistreQuestionsPapier', 'gererEncheres', 'suivreEncheres', 'suiviEntreprise', 'envoiBoamp', 'accesClassementLot', 'connecteurSis', 'connecteurMarco', 'repondreAuxQuestions', 'appelProjetFormation', 'utiliserClientCao', 'notificationBoamp', 'administrerCompte', 'gestionMapa', 'gestionTypeValidation', 'approuverConsultation', 'administrerProcedure', 'restreindreCreation', 'creerListeMarches', 'gestionCommissions', 'suiviSeulConsultation', 'attributionMarche', 'ficheRecensement', 'declarerInfructueux', 'declarerSansSuite', 'creerConsultationTransverse', 'ouvrirCandidatureEnLigne', 'ouvrirCandidatureADistance', 'refuserEnveloppe', 'gererAdmissibilite', 'restaurerEnveloppe', 'ouvrirAnonymatEnLigne', 'ouvrirOffreEnLigne', 'gestionCompteBoamp', 'gestionAgents', 'gestionHabilitations', 'gererMapaInferieurMontant', 'gererMapaSuperieurMontant', 'modifierConsultationAvantValidation', 'modifierConsultationApresValidation', 'accesReponses', 'telechargementGroupeAnticipePlisChiffres', 'telechargementUnitairePlisChiffres', 'ouvrirOffreADistance', 'creerAnnonceInformation', 'saisieMarches', 'validationMarches', 'publicationMarches', 'gererStatistiquesMetier', 'gererArchives', 'administrerProceduresFormalisees', 'creerAnnonceAttribution', 'accesRegistreRetraitsElectronique', 'accesRegistreQuestionsElectronique', 'accesRegistreDepotsElectronique', 'validationSimple', 'validationIntermediaire', 'validationFinale', 'creerSuiteConsultation', 'hyperAdmin', 'droitGestionServices', 'suiviAcces', 'statistiquesSite', 'statistiquesQos', 'ouvrirAnonymatADistance', 'gestionCompteJal', 'gestionCentralePub', 'gestionCompteGroupeMoniteur', 'ouvrirOffreTechniqueEnLigne', 'ouvrirOffreTechniqueADistance', 'activationCompteEntreprise', 'importerEnveloppe', 'suiviSeulRegistreDepotsPapier', 'suiviSeulRegistreRetraitsPapier', 'suiviSeulRegistreQuestionsPapier', 'suiviSeulRegistreDepotsElectronique', 'suiviSeulRegistreRetraitsElectronique', 'suiviSeulRegistreQuestionsElectronique', 'modifierConsultationMapaInferieurMontantApresValidation', 'modifierConsultationMapaSuperieurMontantApresValidation', 'modifierConsultationProceduresFormaliseesApresValidation', 'gererLesEntreprises', 'porteeSocietesExclues', 'porteeSocietesExcluesTousOrganismes', 'modifierSocietesExclues', 'supprimerSocietesExclues', 'resultatAnalyse', 'gererAdressesService', 'gererMonService', 'downloadArchives', 'creerAnnonceExtraitPv', 'creerAnnonceRapportAchevement', 'gestionCertificatsAgent', 'creerAvisProgrammePrevisionnel', 'annulerConsultation', 'envoyerPublicite', 'listeMarchesNotifies', 'suivreMessage', 'envoyerMessage', 'suiviFluxChorusTransversal', 'gestionMandataire', 'gererNewsletter', 'gestionModelesFormulaire', 'gestionAdressesFacturationJal', 'administrerAdressesFacturationJal', 'redactionDocumentsRedac', 'validationDocumentsRedac', 'gestionMiseDispositionPiecesMarche', 'annuaireAcheteur', 'reprendreIntegralementArticle', 'administrerClauses', 'validerClauses', 'administrerCanevas', 'validerCanevas', 'administrerClausesEntiteAchats', 'genererPiecesFormatOdt', 'publierVersionClausierEditeur', 'administrerClausesEditeur', 'validerClausesEditeur', 'administrerCanevasEditeur', 'validerCanevasEditeur', 'decisionSuiviSeul', 'ouvrirCandidatureHorsLigne', 'ouvrirOffreHorsLigne', 'ouvrirOffreTechniqueHorsLigne', 'ouvrirAnonymatHorsLigne', 'espaceCollaboratifGestionnaire', 'espaceCollaboratifContributeur', 'gererOrganismes', 'gererAssociationsAgents', 'moduleRedactionUniquement', 'historiqueNavigationInscrits', 'telechargerAccordsCadres', 'creerAnnonceDecisionResiliation', 'creerAnnonceSyntheseRapportAudit', 'gererOperations', 'telechargerSiretAcheteur', 'gererReouverturesModification', 'envoyerDemandeValidation', 'suivreConsultationOrganisme', 'renseignerMontant', 'gestionReferentielContact', 'gererCao', 'validationAccesFacture', 'gestionTravauxCao', ),
        BasePeer::TYPE_COLNAME => array (CommonHabilitationAgentPeer::ID_AGENT, CommonHabilitationAgentPeer::GESTION_AGENT_POLE, CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX, CommonHabilitationAgentPeer::GESTION_BI_CLES, CommonHabilitationAgentPeer::CREER_CONSULTATION, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION, CommonHabilitationAgentPeer::VALIDER_CONSULTATION, CommonHabilitationAgentPeer::PUBLIER_CONSULTATION, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE, CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE, CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION, CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE, CommonHabilitationAgentPeer::DEPOUILLER_OFFRE, CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE, CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER, CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER, CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER, CommonHabilitationAgentPeer::GERER_ENCHERES, CommonHabilitationAgentPeer::SUIVRE_ENCHERES, CommonHabilitationAgentPeer::SUIVI_ENTREPRISE, CommonHabilitationAgentPeer::ENVOI_BOAMP, CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT, CommonHabilitationAgentPeer::CONNECTEUR_SIS, CommonHabilitationAgentPeer::CONNECTEUR_MARCO, CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS, CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION, CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO, CommonHabilitationAgentPeer::NOTIFICATION_BOAMP, CommonHabilitationAgentPeer::ADMINISTRER_COMPTE, CommonHabilitationAgentPeer::GESTION_MAPA, CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION, CommonHabilitationAgentPeer::APPROUVER_CONSULTATION, CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE, CommonHabilitationAgentPeer::RESTREINDRE_CREATION, CommonHabilitationAgentPeer::CREER_LISTE_MARCHES, CommonHabilitationAgentPeer::GESTION_COMMISSIONS, CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION, CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE, CommonHabilitationAgentPeer::FICHE_RECENSEMENT, CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX, CommonHabilitationAgentPeer::DECLARER_SANS_SUITE, CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE, CommonHabilitationAgentPeer::REFUSER_ENVELOPPE, CommonHabilitationAgentPeer::GERER_ADMISSIBILITE, CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE, CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE, CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP, CommonHabilitationAgentPeer::GESTION_AGENTS, CommonHabilitationAgentPeer::GESTION_HABILITATIONS, CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT, CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION, CommonHabilitationAgentPeer::ACCES_REPONSES, CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES, CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES, CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE, CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION, CommonHabilitationAgentPeer::SAISIE_MARCHES, CommonHabilitationAgentPeer::VALIDATION_MARCHES, CommonHabilitationAgentPeer::PUBLICATION_MARCHES, CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER, CommonHabilitationAgentPeer::GERER_ARCHIVES, CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES, CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION, CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE, CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE, CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE, CommonHabilitationAgentPeer::VALIDATION_SIMPLE, CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE, CommonHabilitationAgentPeer::VALIDATION_FINALE, CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION, CommonHabilitationAgentPeer::HYPER_ADMIN, CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES, CommonHabilitationAgentPeer::SUIVI_ACCES, CommonHabilitationAgentPeer::STATISTIQUES_SITE, CommonHabilitationAgentPeer::STATISTIQUES_QOS, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE, CommonHabilitationAgentPeer::GESTION_COMPTE_JAL, CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB, CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE, CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE, CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION, CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES, CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES, CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES, CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES, CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES, CommonHabilitationAgentPeer::RESULTAT_ANALYSE, CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE, CommonHabilitationAgentPeer::GERER_MON_SERVICE, CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES, CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV, CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT, CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT, CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL, CommonHabilitationAgentPeer::ANNULER_CONSULTATION, CommonHabilitationAgentPeer::ENVOYER_PUBLICITE, CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES, CommonHabilitationAgentPeer::SUIVRE_MESSAGE, CommonHabilitationAgentPeer::ENVOYER_MESSAGE, CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL, CommonHabilitationAgentPeer::GESTION_MANDATAIRE, CommonHabilitationAgentPeer::GERER_NEWSLETTER, CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE, CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL, CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL, CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC, CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC, CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE, CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR, CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES, CommonHabilitationAgentPeer::VALIDER_CLAUSES, CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS, CommonHabilitationAgentPeer::VALIDER_CANEVAS, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS, CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT, CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR, CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR, CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR, CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR, CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE, CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE, CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE, CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR, CommonHabilitationAgentPeer::GERER_ORGANISMES, CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS, CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT, CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS, CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES, CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION, CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT, CommonHabilitationAgentPeer::GERER_OPERATIONS, CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR, CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION, CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME, CommonHabilitationAgentPeer::RENSEIGNER_MONTANT, CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT, CommonHabilitationAgentPeer::GERER_CAO, CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE, CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AGENT', 'GESTION_AGENT_POLE', 'GESTION_FOURNISSEURS_ENVOIS_POSTAUX', 'GESTION_BI_CLES', 'CREER_CONSULTATION', 'MODIFIER_CONSULTATION', 'VALIDER_CONSULTATION', 'PUBLIER_CONSULTATION', 'SUIVRE_CONSULTATION', 'SUIVRE_CONSULTATION_POLE', 'SUPPRIMER_ENVELOPPE', 'SUPPRIMER_CONSULTATION', 'DEPOUILLER_CANDIDATURE', 'DEPOUILLER_OFFRE', 'MESSAGERIE_SECURISEE', 'ACCES_REGISTRE_DEPOTS_PAPIER', 'ACCES_REGISTRE_RETRAITS_PAPIER', 'ACCES_REGISTRE_QUESTIONS_PAPIER', 'GERER_ENCHERES', 'SUIVRE_ENCHERES', 'SUIVI_ENTREPRISE', 'ENVOI_BOAMP', 'ACCES_CLASSEMENT_LOT', 'CONNECTEUR_SIS', 'CONNECTEUR_MARCO', 'REPONDRE_AUX_QUESTIONS', 'APPEL_PROJET_FORMATION', 'UTILISER_CLIENT_CAO', 'NOTIFICATION_BOAMP', 'ADMINISTRER_COMPTE', 'GESTION_MAPA', 'GESTION_TYPE_VALIDATION', 'APPROUVER_CONSULTATION', 'ADMINISTRER_PROCEDURE', 'RESTREINDRE_CREATION', 'CREER_LISTE_MARCHES', 'GESTION_COMMISSIONS', 'SUIVI_SEUL_CONSULTATION', 'ATTRIBUTION_MARCHE', 'FICHE_RECENSEMENT', 'DECLARER_INFRUCTUEUX', 'DECLARER_SANS_SUITE', 'CREER_CONSULTATION_TRANSVERSE', 'OUVRIR_CANDIDATURE_EN_LIGNE', 'OUVRIR_CANDIDATURE_A_DISTANCE', 'REFUSER_ENVELOPPE', 'GERER_ADMISSIBILITE', 'RESTAURER_ENVELOPPE', 'OUVRIR_ANONYMAT_EN_LIGNE', 'OUVRIR_OFFRE_EN_LIGNE', 'GESTION_COMPTE_BOAMP', 'GESTION_AGENTS', 'GESTION_HABILITATIONS', 'GERER_MAPA_INFERIEUR_MONTANT', 'GERER_MAPA_SUPERIEUR_MONTANT', 'MODIFIER_CONSULTATION_AVANT_VALIDATION', 'MODIFIER_CONSULTATION_APRES_VALIDATION', 'ACCES_REPONSES', 'TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES', 'TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES', 'OUVRIR_OFFRE_A_DISTANCE', 'CREER_ANNONCE_INFORMATION', 'SAISIE_MARCHES', 'VALIDATION_MARCHES', 'PUBLICATION_MARCHES', 'GERER_STATISTIQUES_METIER', 'GERER_ARCHIVES', 'ADMINISTRER_PROCEDURES_FORMALISEES', 'CREER_ANNONCE_ATTRIBUTION', 'ACCES_REGISTRE_RETRAITS_ELECTRONIQUE', 'ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE', 'ACCES_REGISTRE_DEPOTS_ELECTRONIQUE', 'VALIDATION_SIMPLE', 'VALIDATION_INTERMEDIAIRE', 'VALIDATION_FINALE', 'CREER_SUITE_CONSULTATION', 'HYPER_ADMIN', 'DROIT_GESTION_SERVICES', 'SUIVI_ACCES', 'STATISTIQUES_SITE', 'STATISTIQUES_QOS', 'OUVRIR_ANONYMAT_A_DISTANCE', 'GESTION_COMPTE_JAL', 'GESTION_CENTRALE_PUB', 'GESTION_COMPTE_GROUPE_MONITEUR', 'OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE', 'OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE', 'ACTIVATION_COMPTE_ENTREPRISE', 'IMPORTER_ENVELOPPE', 'SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER', 'SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER', 'SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER', 'SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE', 'SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE', 'SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE', 'MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION', 'MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION', 'MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION', 'GERER_LES_ENTREPRISES', 'PORTEE_SOCIETES_EXCLUES', 'PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES', 'MODIFIER_SOCIETES_EXCLUES', 'SUPPRIMER_SOCIETES_EXCLUES', 'RESULTAT_ANALYSE', 'GERER_ADRESSES_SERVICE', 'GERER_MON_SERVICE', 'DOWNLOAD_ARCHIVES', 'CREER_ANNONCE_EXTRAIT_PV', 'CREER_ANNONCE_RAPPORT_ACHEVEMENT', 'GESTION_CERTIFICATS_AGENT', 'CREER_AVIS_PROGRAMME_PREVISIONNEL', 'ANNULER_CONSULTATION', 'ENVOYER_PUBLICITE', 'LISTE_MARCHES_NOTIFIES', 'SUIVRE_MESSAGE', 'ENVOYER_MESSAGE', 'SUIVI_FLUX_CHORUS_TRANSVERSAL', 'GESTION_MANDATAIRE', 'GERER_NEWSLETTER', 'GESTION_MODELES_FORMULAIRE', 'GESTION_ADRESSES_FACTURATION_JAL', 'ADMINISTRER_ADRESSES_FACTURATION_JAL', 'REDACTION_DOCUMENTS_REDAC', 'VALIDATION_DOCUMENTS_REDAC', 'GESTION_MISE_DISPOSITION_PIECES_MARCHE', 'ANNUAIRE_ACHETEUR', 'REPRENDRE_INTEGRALEMENT_ARTICLE', 'ADMINISTRER_CLAUSES', 'VALIDER_CLAUSES', 'ADMINISTRER_CANEVAS', 'VALIDER_CANEVAS', 'ADMINISTRER_CLAUSES_ENTITE_ACHATS', 'GENERER_PIECES_FORMAT_ODT', 'PUBLIER_VERSION_CLAUSIER_EDITEUR', 'ADMINISTRER_CLAUSES_EDITEUR', 'VALIDER_CLAUSES_EDITEUR', 'ADMINISTRER_CANEVAS_EDITEUR', 'VALIDER_CANEVAS_EDITEUR', 'DECISION_SUIVI_SEUL', 'OUVRIR_CANDIDATURE_HORS_LIGNE', 'OUVRIR_OFFRE_HORS_LIGNE', 'OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE', 'OUVRIR_ANONYMAT_HORS_LIGNE', 'ESPACE_COLLABORATIF_GESTIONNAIRE', 'ESPACE_COLLABORATIF_CONTRIBUTEUR', 'GERER_ORGANISMES', 'GERER_ASSOCIATIONS_AGENTS', 'MODULE_REDACTION_UNIQUEMENT', 'HISTORIQUE_NAVIGATION_INSCRITS', 'TELECHARGER_ACCORDS_CADRES', 'CREER_ANNONCE_DECISION_RESILIATION', 'CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT', 'GERER_OPERATIONS', 'TELECHARGER_SIRET_ACHETEUR', 'GERER_REOUVERTURES_MODIFICATION', 'ENVOYER_DEMANDE_VALIDATION', 'SUIVRE_CONSULTATION_ORGANISME', 'RENSEIGNER_MONTANT', 'GESTION_REFERENTIEL_CONTACT', 'GERER_CAO', 'VALIDATION_ACCES_FACTURE', 'GESTION_TRAVAUX_CAO', ),
        BasePeer::TYPE_FIELDNAME => array ('id_agent', 'gestion_agent_pole', 'gestion_fournisseurs_envois_postaux', 'gestion_bi_cles', 'creer_consultation', 'modifier_consultation', 'valider_consultation', 'publier_consultation', 'suivre_consultation', 'suivre_consultation_pole', 'supprimer_enveloppe', 'supprimer_consultation', 'depouiller_candidature', 'depouiller_offre', 'messagerie_securisee', 'acces_registre_depots_papier', 'acces_registre_retraits_papier', 'acces_registre_questions_papier', 'gerer_encheres', 'suivre_encheres', 'suivi_entreprise', 'envoi_boamp', 'acces_classement_lot', 'connecteur_sis', 'connecteur_marco', 'repondre_aux_questions', 'appel_projet_formation', 'utiliser_client_CAO', 'notification_boamp', 'administrer_compte', 'gestion_mapa', 'gestion_type_validation', 'approuver_consultation', 'administrer_procedure', 'restreindre_creation', 'creer_liste_marches', 'gestion_commissions', 'suivi_seul_consultation', 'attribution_marche', 'fiche_recensement', 'declarer_infructueux', 'declarer_sans_suite', 'creer_consultation_transverse', 'ouvrir_candidature_en_ligne', 'ouvrir_candidature_a_distance', 'refuser_enveloppe', 'gerer_admissibilite', 'restaurer_enveloppe', 'ouvrir_anonymat_en_ligne', 'ouvrir_offre_en_ligne', 'gestion_compte_boamp', 'gestion_agents', 'gestion_habilitations', 'gerer_mapa_inferieur_montant', 'gerer_mapa_superieur_montant', 'modifier_consultation_avant_validation', 'modifier_consultation_apres_validation', 'acces_reponses', 'telechargement_groupe_anticipe_plis_chiffres', 'telechargement_unitaire_plis_chiffres', 'ouvrir_offre_a_distance', 'creer_annonce_information', 'saisie_marches', 'validation_marches', 'publication_marches', 'gerer_statistiques_metier', 'gerer_archives', 'administrer_procedures_formalisees', 'creer_annonce_attribution', 'acces_registre_retraits_electronique', 'acces_registre_questions_electronique', 'acces_registre_depots_electronique', 'validation_simple', 'validation_intermediaire', 'validation_finale', 'creer_suite_consultation', 'hyper_admin', 'droit_gestion_services', 'suivi_acces', 'statistiques_site', 'statistiques_QoS', 'ouvrir_anonymat_a_distance', 'gestion_compte_jal', 'gestion_centrale_pub', 'Gestion_Compte_Groupe_Moniteur', 'ouvrir_offre_technique_en_ligne', 'ouvrir_offre_technique_a_distance', 'activation_compte_entreprise', 'importer_enveloppe', 'suivi_seul_registre_depots_papier', 'suivi_seul_registre_retraits_papier', 'suivi_seul_registre_questions_papier', 'suivi_seul_registre_depots_electronique', 'suivi_seul_registre_retraits_electronique', 'suivi_seul_registre_questions_electronique', 'modifier_consultation_mapa_inferieur_montant_apres_validation', 'modifier_consultation_mapa_superieur_montant_apres_validation', 'modifier_consultation_procedures_formalisees_apres_validation', 'gerer_les_entreprises', 'portee_societes_exclues', 'portee_societes_exclues_tous_organismes', 'modifier_societes_exclues', 'supprimer_societes_exclues', 'resultat_analyse', 'gerer_adresses_service', 'gerer_mon_service', 'download_archives', 'creer_annonce_extrait_pv', 'creer_annonce_rapport_achevement', 'gestion_certificats_agent', 'creer_avis_programme_previsionnel', 'annuler_consultation', 'envoyer_publicite', 'liste_marches_notifies', 'suivre_message', 'envoyer_message', 'suivi_flux_chorus_transversal', 'gestion_mandataire', 'gerer_newsletter', 'gestion_modeles_formulaire', 'gestion_adresses_facturation_jal', 'administrer_adresses_facturation_jal', 'redaction_documents_redac', 'validation_documents_redac', 'gestion_mise_disposition_pieces_marche', 'annuaire_acheteur', 'reprendre_integralement_article', 'administrer_clauses', 'valider_clauses', 'administrer_canevas', 'valider_canevas', 'administrer_clauses_entite_achats', 'generer_pieces_format_odt', 'publier_version_clausier_editeur', 'administrer_clauses_editeur', 'valider_clauses_editeur', 'administrer_canevas_editeur', 'valider_canevas_editeur', 'decision_suivi_seul', 'ouvrir_candidature_hors_ligne', 'ouvrir_offre_hors_ligne', 'ouvrir_offre_technique_hors_ligne', 'ouvrir_anonymat_hors_ligne', 'espace_collaboratif_gestionnaire', 'espace_collaboratif_contributeur', 'gerer_organismes', 'gerer_associations_agents', 'module_redaction_uniquement', 'historique_navigation_inscrits', 'telecharger_accords_cadres', 'creer_annonce_decision_resiliation', 'creer_annonce_synthese_rapport_audit', 'gerer_operations', 'telecharger_siret_acheteur', 'gerer_reouvertures_modification', 'envoyer_demande_validation', 'suivre_consultation_organisme', 'renseigner_montant', 'gestion_referentiel_contact', 'gerer_cao', 'validation_acces_facture', 'gestion_travaux_cao', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonHabilitationAgentPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdAgent' => 0, 'GestionAgentPole' => 1, 'GestionFournisseursEnvoisPostaux' => 2, 'GestionBiCles' => 3, 'CreerConsultation' => 4, 'ModifierConsultation' => 5, 'ValiderConsultation' => 6, 'PublierConsultation' => 7, 'SuivreConsultation' => 8, 'SuivreConsultationPole' => 9, 'SupprimerEnveloppe' => 10, 'SupprimerConsultation' => 11, 'DepouillerCandidature' => 12, 'DepouillerOffre' => 13, 'MessagerieSecurisee' => 14, 'AccesRegistreDepotsPapier' => 15, 'AccesRegistreRetraitsPapier' => 16, 'AccesRegistreQuestionsPapier' => 17, 'GererEncheres' => 18, 'SuivreEncheres' => 19, 'SuiviEntreprise' => 20, 'EnvoiBoamp' => 21, 'AccesClassementLot' => 22, 'ConnecteurSis' => 23, 'ConnecteurMarco' => 24, 'RepondreAuxQuestions' => 25, 'AppelProjetFormation' => 26, 'UtiliserClientCao' => 27, 'NotificationBoamp' => 28, 'AdministrerCompte' => 29, 'GestionMapa' => 30, 'GestionTypeValidation' => 31, 'ApprouverConsultation' => 32, 'AdministrerProcedure' => 33, 'RestreindreCreation' => 34, 'CreerListeMarches' => 35, 'GestionCommissions' => 36, 'SuiviSeulConsultation' => 37, 'AttributionMarche' => 38, 'FicheRecensement' => 39, 'DeclarerInfructueux' => 40, 'DeclarerSansSuite' => 41, 'CreerConsultationTransverse' => 42, 'OuvrirCandidatureEnLigne' => 43, 'OuvrirCandidatureADistance' => 44, 'RefuserEnveloppe' => 45, 'GererAdmissibilite' => 46, 'RestaurerEnveloppe' => 47, 'OuvrirAnonymatEnLigne' => 48, 'OuvrirOffreEnLigne' => 49, 'GestionCompteBoamp' => 50, 'GestionAgents' => 51, 'GestionHabilitations' => 52, 'GererMapaInferieurMontant' => 53, 'GererMapaSuperieurMontant' => 54, 'ModifierConsultationAvantValidation' => 55, 'ModifierConsultationApresValidation' => 56, 'AccesReponses' => 57, 'TelechargementGroupeAnticipePlisChiffres' => 58, 'TelechargementUnitairePlisChiffres' => 59, 'OuvrirOffreADistance' => 60, 'CreerAnnonceInformation' => 61, 'SaisieMarches' => 62, 'ValidationMarches' => 63, 'PublicationMarches' => 64, 'GererStatistiquesMetier' => 65, 'GererArchives' => 66, 'AdministrerProceduresFormalisees' => 67, 'CreerAnnonceAttribution' => 68, 'AccesRegistreRetraitsElectronique' => 69, 'AccesRegistreQuestionsElectronique' => 70, 'AccesRegistreDepotsElectronique' => 71, 'ValidationSimple' => 72, 'ValidationIntermediaire' => 73, 'ValidationFinale' => 74, 'CreerSuiteConsultation' => 75, 'HyperAdmin' => 76, 'DroitGestionServices' => 77, 'SuiviAcces' => 78, 'StatistiquesSite' => 79, 'StatistiquesQos' => 80, 'OuvrirAnonymatADistance' => 81, 'GestionCompteJal' => 82, 'GestionCentralePub' => 83, 'GestionCompteGroupeMoniteur' => 84, 'OuvrirOffreTechniqueEnLigne' => 85, 'OuvrirOffreTechniqueADistance' => 86, 'ActivationCompteEntreprise' => 87, 'ImporterEnveloppe' => 88, 'SuiviSeulRegistreDepotsPapier' => 89, 'SuiviSeulRegistreRetraitsPapier' => 90, 'SuiviSeulRegistreQuestionsPapier' => 91, 'SuiviSeulRegistreDepotsElectronique' => 92, 'SuiviSeulRegistreRetraitsElectronique' => 93, 'SuiviSeulRegistreQuestionsElectronique' => 94, 'ModifierConsultationMapaInferieurMontantApresValidation' => 95, 'ModifierConsultationMapaSuperieurMontantApresValidation' => 96, 'ModifierConsultationProceduresFormaliseesApresValidation' => 97, 'GererLesEntreprises' => 98, 'PorteeSocietesExclues' => 99, 'PorteeSocietesExcluesTousOrganismes' => 100, 'ModifierSocietesExclues' => 101, 'SupprimerSocietesExclues' => 102, 'ResultatAnalyse' => 103, 'GererAdressesService' => 104, 'GererMonService' => 105, 'DownloadArchives' => 106, 'CreerAnnonceExtraitPv' => 107, 'CreerAnnonceRapportAchevement' => 108, 'GestionCertificatsAgent' => 109, 'CreerAvisProgrammePrevisionnel' => 110, 'AnnulerConsultation' => 111, 'EnvoyerPublicite' => 112, 'ListeMarchesNotifies' => 113, 'SuivreMessage' => 114, 'EnvoyerMessage' => 115, 'SuiviFluxChorusTransversal' => 116, 'GestionMandataire' => 117, 'GererNewsletter' => 118, 'GestionModelesFormulaire' => 119, 'GestionAdressesFacturationJal' => 120, 'AdministrerAdressesFacturationJal' => 121, 'RedactionDocumentsRedac' => 122, 'ValidationDocumentsRedac' => 123, 'GestionMiseDispositionPiecesMarche' => 124, 'AnnuaireAcheteur' => 125, 'ReprendreIntegralementArticle' => 126, 'AdministrerClauses' => 127, 'ValiderClauses' => 128, 'AdministrerCanevas' => 129, 'ValiderCanevas' => 130, 'AdministrerClausesEntiteAchats' => 131, 'GenererPiecesFormatOdt' => 132, 'PublierVersionClausierEditeur' => 133, 'AdministrerClausesEditeur' => 134, 'ValiderClausesEditeur' => 135, 'AdministrerCanevasEditeur' => 136, 'ValiderCanevasEditeur' => 137, 'DecisionSuiviSeul' => 138, 'OuvrirCandidatureHorsLigne' => 139, 'OuvrirOffreHorsLigne' => 140, 'OuvrirOffreTechniqueHorsLigne' => 141, 'OuvrirAnonymatHorsLigne' => 142, 'EspaceCollaboratifGestionnaire' => 143, 'EspaceCollaboratifContributeur' => 144, 'GererOrganismes' => 145, 'GererAssociationsAgents' => 146, 'ModuleRedactionUniquement' => 147, 'HistoriqueNavigationInscrits' => 148, 'TelechargerAccordsCadres' => 149, 'CreerAnnonceDecisionResiliation' => 150, 'CreerAnnonceSyntheseRapportAudit' => 151, 'GererOperations' => 152, 'TelechargerSiretAcheteur' => 153, 'GererReouverturesModification' => 154, 'EnvoyerDemandeValidation' => 155, 'SuivreConsultationOrganisme' => 156, 'RenseignerMontant' => 157, 'GestionReferentielContact' => 158, 'GererCao' => 159, 'ValidationAccesFacture' => 160, 'GestionTravauxCao' => 161, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idAgent' => 0, 'gestionAgentPole' => 1, 'gestionFournisseursEnvoisPostaux' => 2, 'gestionBiCles' => 3, 'creerConsultation' => 4, 'modifierConsultation' => 5, 'validerConsultation' => 6, 'publierConsultation' => 7, 'suivreConsultation' => 8, 'suivreConsultationPole' => 9, 'supprimerEnveloppe' => 10, 'supprimerConsultation' => 11, 'depouillerCandidature' => 12, 'depouillerOffre' => 13, 'messagerieSecurisee' => 14, 'accesRegistreDepotsPapier' => 15, 'accesRegistreRetraitsPapier' => 16, 'accesRegistreQuestionsPapier' => 17, 'gererEncheres' => 18, 'suivreEncheres' => 19, 'suiviEntreprise' => 20, 'envoiBoamp' => 21, 'accesClassementLot' => 22, 'connecteurSis' => 23, 'connecteurMarco' => 24, 'repondreAuxQuestions' => 25, 'appelProjetFormation' => 26, 'utiliserClientCao' => 27, 'notificationBoamp' => 28, 'administrerCompte' => 29, 'gestionMapa' => 30, 'gestionTypeValidation' => 31, 'approuverConsultation' => 32, 'administrerProcedure' => 33, 'restreindreCreation' => 34, 'creerListeMarches' => 35, 'gestionCommissions' => 36, 'suiviSeulConsultation' => 37, 'attributionMarche' => 38, 'ficheRecensement' => 39, 'declarerInfructueux' => 40, 'declarerSansSuite' => 41, 'creerConsultationTransverse' => 42, 'ouvrirCandidatureEnLigne' => 43, 'ouvrirCandidatureADistance' => 44, 'refuserEnveloppe' => 45, 'gererAdmissibilite' => 46, 'restaurerEnveloppe' => 47, 'ouvrirAnonymatEnLigne' => 48, 'ouvrirOffreEnLigne' => 49, 'gestionCompteBoamp' => 50, 'gestionAgents' => 51, 'gestionHabilitations' => 52, 'gererMapaInferieurMontant' => 53, 'gererMapaSuperieurMontant' => 54, 'modifierConsultationAvantValidation' => 55, 'modifierConsultationApresValidation' => 56, 'accesReponses' => 57, 'telechargementGroupeAnticipePlisChiffres' => 58, 'telechargementUnitairePlisChiffres' => 59, 'ouvrirOffreADistance' => 60, 'creerAnnonceInformation' => 61, 'saisieMarches' => 62, 'validationMarches' => 63, 'publicationMarches' => 64, 'gererStatistiquesMetier' => 65, 'gererArchives' => 66, 'administrerProceduresFormalisees' => 67, 'creerAnnonceAttribution' => 68, 'accesRegistreRetraitsElectronique' => 69, 'accesRegistreQuestionsElectronique' => 70, 'accesRegistreDepotsElectronique' => 71, 'validationSimple' => 72, 'validationIntermediaire' => 73, 'validationFinale' => 74, 'creerSuiteConsultation' => 75, 'hyperAdmin' => 76, 'droitGestionServices' => 77, 'suiviAcces' => 78, 'statistiquesSite' => 79, 'statistiquesQos' => 80, 'ouvrirAnonymatADistance' => 81, 'gestionCompteJal' => 82, 'gestionCentralePub' => 83, 'gestionCompteGroupeMoniteur' => 84, 'ouvrirOffreTechniqueEnLigne' => 85, 'ouvrirOffreTechniqueADistance' => 86, 'activationCompteEntreprise' => 87, 'importerEnveloppe' => 88, 'suiviSeulRegistreDepotsPapier' => 89, 'suiviSeulRegistreRetraitsPapier' => 90, 'suiviSeulRegistreQuestionsPapier' => 91, 'suiviSeulRegistreDepotsElectronique' => 92, 'suiviSeulRegistreRetraitsElectronique' => 93, 'suiviSeulRegistreQuestionsElectronique' => 94, 'modifierConsultationMapaInferieurMontantApresValidation' => 95, 'modifierConsultationMapaSuperieurMontantApresValidation' => 96, 'modifierConsultationProceduresFormaliseesApresValidation' => 97, 'gererLesEntreprises' => 98, 'porteeSocietesExclues' => 99, 'porteeSocietesExcluesTousOrganismes' => 100, 'modifierSocietesExclues' => 101, 'supprimerSocietesExclues' => 102, 'resultatAnalyse' => 103, 'gererAdressesService' => 104, 'gererMonService' => 105, 'downloadArchives' => 106, 'creerAnnonceExtraitPv' => 107, 'creerAnnonceRapportAchevement' => 108, 'gestionCertificatsAgent' => 109, 'creerAvisProgrammePrevisionnel' => 110, 'annulerConsultation' => 111, 'envoyerPublicite' => 112, 'listeMarchesNotifies' => 113, 'suivreMessage' => 114, 'envoyerMessage' => 115, 'suiviFluxChorusTransversal' => 116, 'gestionMandataire' => 117, 'gererNewsletter' => 118, 'gestionModelesFormulaire' => 119, 'gestionAdressesFacturationJal' => 120, 'administrerAdressesFacturationJal' => 121, 'redactionDocumentsRedac' => 122, 'validationDocumentsRedac' => 123, 'gestionMiseDispositionPiecesMarche' => 124, 'annuaireAcheteur' => 125, 'reprendreIntegralementArticle' => 126, 'administrerClauses' => 127, 'validerClauses' => 128, 'administrerCanevas' => 129, 'validerCanevas' => 130, 'administrerClausesEntiteAchats' => 131, 'genererPiecesFormatOdt' => 132, 'publierVersionClausierEditeur' => 133, 'administrerClausesEditeur' => 134, 'validerClausesEditeur' => 135, 'administrerCanevasEditeur' => 136, 'validerCanevasEditeur' => 137, 'decisionSuiviSeul' => 138, 'ouvrirCandidatureHorsLigne' => 139, 'ouvrirOffreHorsLigne' => 140, 'ouvrirOffreTechniqueHorsLigne' => 141, 'ouvrirAnonymatHorsLigne' => 142, 'espaceCollaboratifGestionnaire' => 143, 'espaceCollaboratifContributeur' => 144, 'gererOrganismes' => 145, 'gererAssociationsAgents' => 146, 'moduleRedactionUniquement' => 147, 'historiqueNavigationInscrits' => 148, 'telechargerAccordsCadres' => 149, 'creerAnnonceDecisionResiliation' => 150, 'creerAnnonceSyntheseRapportAudit' => 151, 'gererOperations' => 152, 'telechargerSiretAcheteur' => 153, 'gererReouverturesModification' => 154, 'envoyerDemandeValidation' => 155, 'suivreConsultationOrganisme' => 156, 'renseignerMontant' => 157, 'gestionReferentielContact' => 158, 'gererCao' => 159, 'validationAccesFacture' => 160, 'gestionTravauxCao' => 161, ),
        BasePeer::TYPE_COLNAME => array (CommonHabilitationAgentPeer::ID_AGENT => 0, CommonHabilitationAgentPeer::GESTION_AGENT_POLE => 1, CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX => 2, CommonHabilitationAgentPeer::GESTION_BI_CLES => 3, CommonHabilitationAgentPeer::CREER_CONSULTATION => 4, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION => 5, CommonHabilitationAgentPeer::VALIDER_CONSULTATION => 6, CommonHabilitationAgentPeer::PUBLIER_CONSULTATION => 7, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION => 8, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE => 9, CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE => 10, CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION => 11, CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE => 12, CommonHabilitationAgentPeer::DEPOUILLER_OFFRE => 13, CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE => 14, CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER => 15, CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER => 16, CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER => 17, CommonHabilitationAgentPeer::GERER_ENCHERES => 18, CommonHabilitationAgentPeer::SUIVRE_ENCHERES => 19, CommonHabilitationAgentPeer::SUIVI_ENTREPRISE => 20, CommonHabilitationAgentPeer::ENVOI_BOAMP => 21, CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT => 22, CommonHabilitationAgentPeer::CONNECTEUR_SIS => 23, CommonHabilitationAgentPeer::CONNECTEUR_MARCO => 24, CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS => 25, CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION => 26, CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO => 27, CommonHabilitationAgentPeer::NOTIFICATION_BOAMP => 28, CommonHabilitationAgentPeer::ADMINISTRER_COMPTE => 29, CommonHabilitationAgentPeer::GESTION_MAPA => 30, CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION => 31, CommonHabilitationAgentPeer::APPROUVER_CONSULTATION => 32, CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE => 33, CommonHabilitationAgentPeer::RESTREINDRE_CREATION => 34, CommonHabilitationAgentPeer::CREER_LISTE_MARCHES => 35, CommonHabilitationAgentPeer::GESTION_COMMISSIONS => 36, CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION => 37, CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE => 38, CommonHabilitationAgentPeer::FICHE_RECENSEMENT => 39, CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX => 40, CommonHabilitationAgentPeer::DECLARER_SANS_SUITE => 41, CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE => 42, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE => 43, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE => 44, CommonHabilitationAgentPeer::REFUSER_ENVELOPPE => 45, CommonHabilitationAgentPeer::GERER_ADMISSIBILITE => 46, CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE => 47, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE => 48, CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE => 49, CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP => 50, CommonHabilitationAgentPeer::GESTION_AGENTS => 51, CommonHabilitationAgentPeer::GESTION_HABILITATIONS => 52, CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT => 53, CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT => 54, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION => 55, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION => 56, CommonHabilitationAgentPeer::ACCES_REPONSES => 57, CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES => 58, CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES => 59, CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE => 60, CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION => 61, CommonHabilitationAgentPeer::SAISIE_MARCHES => 62, CommonHabilitationAgentPeer::VALIDATION_MARCHES => 63, CommonHabilitationAgentPeer::PUBLICATION_MARCHES => 64, CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER => 65, CommonHabilitationAgentPeer::GERER_ARCHIVES => 66, CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES => 67, CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION => 68, CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE => 69, CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE => 70, CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE => 71, CommonHabilitationAgentPeer::VALIDATION_SIMPLE => 72, CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE => 73, CommonHabilitationAgentPeer::VALIDATION_FINALE => 74, CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION => 75, CommonHabilitationAgentPeer::HYPER_ADMIN => 76, CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES => 77, CommonHabilitationAgentPeer::SUIVI_ACCES => 78, CommonHabilitationAgentPeer::STATISTIQUES_SITE => 79, CommonHabilitationAgentPeer::STATISTIQUES_QOS => 80, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE => 81, CommonHabilitationAgentPeer::GESTION_COMPTE_JAL => 82, CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB => 83, CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR => 84, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE => 85, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE => 86, CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE => 87, CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE => 88, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER => 89, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER => 90, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER => 91, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE => 92, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE => 93, CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE => 94, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION => 95, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION => 96, CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION => 97, CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES => 98, CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES => 99, CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES => 100, CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES => 101, CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES => 102, CommonHabilitationAgentPeer::RESULTAT_ANALYSE => 103, CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE => 104, CommonHabilitationAgentPeer::GERER_MON_SERVICE => 105, CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES => 106, CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV => 107, CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT => 108, CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT => 109, CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL => 110, CommonHabilitationAgentPeer::ANNULER_CONSULTATION => 111, CommonHabilitationAgentPeer::ENVOYER_PUBLICITE => 112, CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES => 113, CommonHabilitationAgentPeer::SUIVRE_MESSAGE => 114, CommonHabilitationAgentPeer::ENVOYER_MESSAGE => 115, CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL => 116, CommonHabilitationAgentPeer::GESTION_MANDATAIRE => 117, CommonHabilitationAgentPeer::GERER_NEWSLETTER => 118, CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE => 119, CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL => 120, CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL => 121, CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC => 122, CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC => 123, CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE => 124, CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR => 125, CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE => 126, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES => 127, CommonHabilitationAgentPeer::VALIDER_CLAUSES => 128, CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS => 129, CommonHabilitationAgentPeer::VALIDER_CANEVAS => 130, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS => 131, CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT => 132, CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR => 133, CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR => 134, CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR => 135, CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR => 136, CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR => 137, CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL => 138, CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE => 139, CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE => 140, CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE => 141, CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE => 142, CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE => 143, CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR => 144, CommonHabilitationAgentPeer::GERER_ORGANISMES => 145, CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS => 146, CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT => 147, CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS => 148, CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES => 149, CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION => 150, CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT => 151, CommonHabilitationAgentPeer::GERER_OPERATIONS => 152, CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR => 153, CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION => 154, CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION => 155, CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME => 156, CommonHabilitationAgentPeer::RENSEIGNER_MONTANT => 157, CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT => 158, CommonHabilitationAgentPeer::GERER_CAO => 159, CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE => 160, CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO => 161, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_AGENT' => 0, 'GESTION_AGENT_POLE' => 1, 'GESTION_FOURNISSEURS_ENVOIS_POSTAUX' => 2, 'GESTION_BI_CLES' => 3, 'CREER_CONSULTATION' => 4, 'MODIFIER_CONSULTATION' => 5, 'VALIDER_CONSULTATION' => 6, 'PUBLIER_CONSULTATION' => 7, 'SUIVRE_CONSULTATION' => 8, 'SUIVRE_CONSULTATION_POLE' => 9, 'SUPPRIMER_ENVELOPPE' => 10, 'SUPPRIMER_CONSULTATION' => 11, 'DEPOUILLER_CANDIDATURE' => 12, 'DEPOUILLER_OFFRE' => 13, 'MESSAGERIE_SECURISEE' => 14, 'ACCES_REGISTRE_DEPOTS_PAPIER' => 15, 'ACCES_REGISTRE_RETRAITS_PAPIER' => 16, 'ACCES_REGISTRE_QUESTIONS_PAPIER' => 17, 'GERER_ENCHERES' => 18, 'SUIVRE_ENCHERES' => 19, 'SUIVI_ENTREPRISE' => 20, 'ENVOI_BOAMP' => 21, 'ACCES_CLASSEMENT_LOT' => 22, 'CONNECTEUR_SIS' => 23, 'CONNECTEUR_MARCO' => 24, 'REPONDRE_AUX_QUESTIONS' => 25, 'APPEL_PROJET_FORMATION' => 26, 'UTILISER_CLIENT_CAO' => 27, 'NOTIFICATION_BOAMP' => 28, 'ADMINISTRER_COMPTE' => 29, 'GESTION_MAPA' => 30, 'GESTION_TYPE_VALIDATION' => 31, 'APPROUVER_CONSULTATION' => 32, 'ADMINISTRER_PROCEDURE' => 33, 'RESTREINDRE_CREATION' => 34, 'CREER_LISTE_MARCHES' => 35, 'GESTION_COMMISSIONS' => 36, 'SUIVI_SEUL_CONSULTATION' => 37, 'ATTRIBUTION_MARCHE' => 38, 'FICHE_RECENSEMENT' => 39, 'DECLARER_INFRUCTUEUX' => 40, 'DECLARER_SANS_SUITE' => 41, 'CREER_CONSULTATION_TRANSVERSE' => 42, 'OUVRIR_CANDIDATURE_EN_LIGNE' => 43, 'OUVRIR_CANDIDATURE_A_DISTANCE' => 44, 'REFUSER_ENVELOPPE' => 45, 'GERER_ADMISSIBILITE' => 46, 'RESTAURER_ENVELOPPE' => 47, 'OUVRIR_ANONYMAT_EN_LIGNE' => 48, 'OUVRIR_OFFRE_EN_LIGNE' => 49, 'GESTION_COMPTE_BOAMP' => 50, 'GESTION_AGENTS' => 51, 'GESTION_HABILITATIONS' => 52, 'GERER_MAPA_INFERIEUR_MONTANT' => 53, 'GERER_MAPA_SUPERIEUR_MONTANT' => 54, 'MODIFIER_CONSULTATION_AVANT_VALIDATION' => 55, 'MODIFIER_CONSULTATION_APRES_VALIDATION' => 56, 'ACCES_REPONSES' => 57, 'TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES' => 58, 'TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES' => 59, 'OUVRIR_OFFRE_A_DISTANCE' => 60, 'CREER_ANNONCE_INFORMATION' => 61, 'SAISIE_MARCHES' => 62, 'VALIDATION_MARCHES' => 63, 'PUBLICATION_MARCHES' => 64, 'GERER_STATISTIQUES_METIER' => 65, 'GERER_ARCHIVES' => 66, 'ADMINISTRER_PROCEDURES_FORMALISEES' => 67, 'CREER_ANNONCE_ATTRIBUTION' => 68, 'ACCES_REGISTRE_RETRAITS_ELECTRONIQUE' => 69, 'ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE' => 70, 'ACCES_REGISTRE_DEPOTS_ELECTRONIQUE' => 71, 'VALIDATION_SIMPLE' => 72, 'VALIDATION_INTERMEDIAIRE' => 73, 'VALIDATION_FINALE' => 74, 'CREER_SUITE_CONSULTATION' => 75, 'HYPER_ADMIN' => 76, 'DROIT_GESTION_SERVICES' => 77, 'SUIVI_ACCES' => 78, 'STATISTIQUES_SITE' => 79, 'STATISTIQUES_QOS' => 80, 'OUVRIR_ANONYMAT_A_DISTANCE' => 81, 'GESTION_COMPTE_JAL' => 82, 'GESTION_CENTRALE_PUB' => 83, 'GESTION_COMPTE_GROUPE_MONITEUR' => 84, 'OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE' => 85, 'OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE' => 86, 'ACTIVATION_COMPTE_ENTREPRISE' => 87, 'IMPORTER_ENVELOPPE' => 88, 'SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER' => 89, 'SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER' => 90, 'SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER' => 91, 'SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE' => 92, 'SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE' => 93, 'SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE' => 94, 'MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION' => 95, 'MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION' => 96, 'MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION' => 97, 'GERER_LES_ENTREPRISES' => 98, 'PORTEE_SOCIETES_EXCLUES' => 99, 'PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES' => 100, 'MODIFIER_SOCIETES_EXCLUES' => 101, 'SUPPRIMER_SOCIETES_EXCLUES' => 102, 'RESULTAT_ANALYSE' => 103, 'GERER_ADRESSES_SERVICE' => 104, 'GERER_MON_SERVICE' => 105, 'DOWNLOAD_ARCHIVES' => 106, 'CREER_ANNONCE_EXTRAIT_PV' => 107, 'CREER_ANNONCE_RAPPORT_ACHEVEMENT' => 108, 'GESTION_CERTIFICATS_AGENT' => 109, 'CREER_AVIS_PROGRAMME_PREVISIONNEL' => 110, 'ANNULER_CONSULTATION' => 111, 'ENVOYER_PUBLICITE' => 112, 'LISTE_MARCHES_NOTIFIES' => 113, 'SUIVRE_MESSAGE' => 114, 'ENVOYER_MESSAGE' => 115, 'SUIVI_FLUX_CHORUS_TRANSVERSAL' => 116, 'GESTION_MANDATAIRE' => 117, 'GERER_NEWSLETTER' => 118, 'GESTION_MODELES_FORMULAIRE' => 119, 'GESTION_ADRESSES_FACTURATION_JAL' => 120, 'ADMINISTRER_ADRESSES_FACTURATION_JAL' => 121, 'REDACTION_DOCUMENTS_REDAC' => 122, 'VALIDATION_DOCUMENTS_REDAC' => 123, 'GESTION_MISE_DISPOSITION_PIECES_MARCHE' => 124, 'ANNUAIRE_ACHETEUR' => 125, 'REPRENDRE_INTEGRALEMENT_ARTICLE' => 126, 'ADMINISTRER_CLAUSES' => 127, 'VALIDER_CLAUSES' => 128, 'ADMINISTRER_CANEVAS' => 129, 'VALIDER_CANEVAS' => 130, 'ADMINISTRER_CLAUSES_ENTITE_ACHATS' => 131, 'GENERER_PIECES_FORMAT_ODT' => 132, 'PUBLIER_VERSION_CLAUSIER_EDITEUR' => 133, 'ADMINISTRER_CLAUSES_EDITEUR' => 134, 'VALIDER_CLAUSES_EDITEUR' => 135, 'ADMINISTRER_CANEVAS_EDITEUR' => 136, 'VALIDER_CANEVAS_EDITEUR' => 137, 'DECISION_SUIVI_SEUL' => 138, 'OUVRIR_CANDIDATURE_HORS_LIGNE' => 139, 'OUVRIR_OFFRE_HORS_LIGNE' => 140, 'OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE' => 141, 'OUVRIR_ANONYMAT_HORS_LIGNE' => 142, 'ESPACE_COLLABORATIF_GESTIONNAIRE' => 143, 'ESPACE_COLLABORATIF_CONTRIBUTEUR' => 144, 'GERER_ORGANISMES' => 145, 'GERER_ASSOCIATIONS_AGENTS' => 146, 'MODULE_REDACTION_UNIQUEMENT' => 147, 'HISTORIQUE_NAVIGATION_INSCRITS' => 148, 'TELECHARGER_ACCORDS_CADRES' => 149, 'CREER_ANNONCE_DECISION_RESILIATION' => 150, 'CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT' => 151, 'GERER_OPERATIONS' => 152, 'TELECHARGER_SIRET_ACHETEUR' => 153, 'GERER_REOUVERTURES_MODIFICATION' => 154, 'ENVOYER_DEMANDE_VALIDATION' => 155, 'SUIVRE_CONSULTATION_ORGANISME' => 156, 'RENSEIGNER_MONTANT' => 157, 'GESTION_REFERENTIEL_CONTACT' => 158, 'GERER_CAO' => 159, 'VALIDATION_ACCES_FACTURE' => 160, 'GESTION_TRAVAUX_CAO' => 161, ),
        BasePeer::TYPE_FIELDNAME => array ('id_agent' => 0, 'gestion_agent_pole' => 1, 'gestion_fournisseurs_envois_postaux' => 2, 'gestion_bi_cles' => 3, 'creer_consultation' => 4, 'modifier_consultation' => 5, 'valider_consultation' => 6, 'publier_consultation' => 7, 'suivre_consultation' => 8, 'suivre_consultation_pole' => 9, 'supprimer_enveloppe' => 10, 'supprimer_consultation' => 11, 'depouiller_candidature' => 12, 'depouiller_offre' => 13, 'messagerie_securisee' => 14, 'acces_registre_depots_papier' => 15, 'acces_registre_retraits_papier' => 16, 'acces_registre_questions_papier' => 17, 'gerer_encheres' => 18, 'suivre_encheres' => 19, 'suivi_entreprise' => 20, 'envoi_boamp' => 21, 'acces_classement_lot' => 22, 'connecteur_sis' => 23, 'connecteur_marco' => 24, 'repondre_aux_questions' => 25, 'appel_projet_formation' => 26, 'utiliser_client_CAO' => 27, 'notification_boamp' => 28, 'administrer_compte' => 29, 'gestion_mapa' => 30, 'gestion_type_validation' => 31, 'approuver_consultation' => 32, 'administrer_procedure' => 33, 'restreindre_creation' => 34, 'creer_liste_marches' => 35, 'gestion_commissions' => 36, 'suivi_seul_consultation' => 37, 'attribution_marche' => 38, 'fiche_recensement' => 39, 'declarer_infructueux' => 40, 'declarer_sans_suite' => 41, 'creer_consultation_transverse' => 42, 'ouvrir_candidature_en_ligne' => 43, 'ouvrir_candidature_a_distance' => 44, 'refuser_enveloppe' => 45, 'gerer_admissibilite' => 46, 'restaurer_enveloppe' => 47, 'ouvrir_anonymat_en_ligne' => 48, 'ouvrir_offre_en_ligne' => 49, 'gestion_compte_boamp' => 50, 'gestion_agents' => 51, 'gestion_habilitations' => 52, 'gerer_mapa_inferieur_montant' => 53, 'gerer_mapa_superieur_montant' => 54, 'modifier_consultation_avant_validation' => 55, 'modifier_consultation_apres_validation' => 56, 'acces_reponses' => 57, 'telechargement_groupe_anticipe_plis_chiffres' => 58, 'telechargement_unitaire_plis_chiffres' => 59, 'ouvrir_offre_a_distance' => 60, 'creer_annonce_information' => 61, 'saisie_marches' => 62, 'validation_marches' => 63, 'publication_marches' => 64, 'gerer_statistiques_metier' => 65, 'gerer_archives' => 66, 'administrer_procedures_formalisees' => 67, 'creer_annonce_attribution' => 68, 'acces_registre_retraits_electronique' => 69, 'acces_registre_questions_electronique' => 70, 'acces_registre_depots_electronique' => 71, 'validation_simple' => 72, 'validation_intermediaire' => 73, 'validation_finale' => 74, 'creer_suite_consultation' => 75, 'hyper_admin' => 76, 'droit_gestion_services' => 77, 'suivi_acces' => 78, 'statistiques_site' => 79, 'statistiques_QoS' => 80, 'ouvrir_anonymat_a_distance' => 81, 'gestion_compte_jal' => 82, 'gestion_centrale_pub' => 83, 'Gestion_Compte_Groupe_Moniteur' => 84, 'ouvrir_offre_technique_en_ligne' => 85, 'ouvrir_offre_technique_a_distance' => 86, 'activation_compte_entreprise' => 87, 'importer_enveloppe' => 88, 'suivi_seul_registre_depots_papier' => 89, 'suivi_seul_registre_retraits_papier' => 90, 'suivi_seul_registre_questions_papier' => 91, 'suivi_seul_registre_depots_electronique' => 92, 'suivi_seul_registre_retraits_electronique' => 93, 'suivi_seul_registre_questions_electronique' => 94, 'modifier_consultation_mapa_inferieur_montant_apres_validation' => 95, 'modifier_consultation_mapa_superieur_montant_apres_validation' => 96, 'modifier_consultation_procedures_formalisees_apres_validation' => 97, 'gerer_les_entreprises' => 98, 'portee_societes_exclues' => 99, 'portee_societes_exclues_tous_organismes' => 100, 'modifier_societes_exclues' => 101, 'supprimer_societes_exclues' => 102, 'resultat_analyse' => 103, 'gerer_adresses_service' => 104, 'gerer_mon_service' => 105, 'download_archives' => 106, 'creer_annonce_extrait_pv' => 107, 'creer_annonce_rapport_achevement' => 108, 'gestion_certificats_agent' => 109, 'creer_avis_programme_previsionnel' => 110, 'annuler_consultation' => 111, 'envoyer_publicite' => 112, 'liste_marches_notifies' => 113, 'suivre_message' => 114, 'envoyer_message' => 115, 'suivi_flux_chorus_transversal' => 116, 'gestion_mandataire' => 117, 'gerer_newsletter' => 118, 'gestion_modeles_formulaire' => 119, 'gestion_adresses_facturation_jal' => 120, 'administrer_adresses_facturation_jal' => 121, 'redaction_documents_redac' => 122, 'validation_documents_redac' => 123, 'gestion_mise_disposition_pieces_marche' => 124, 'annuaire_acheteur' => 125, 'reprendre_integralement_article' => 126, 'administrer_clauses' => 127, 'valider_clauses' => 128, 'administrer_canevas' => 129, 'valider_canevas' => 130, 'administrer_clauses_entite_achats' => 131, 'generer_pieces_format_odt' => 132, 'publier_version_clausier_editeur' => 133, 'administrer_clauses_editeur' => 134, 'valider_clauses_editeur' => 135, 'administrer_canevas_editeur' => 136, 'valider_canevas_editeur' => 137, 'decision_suivi_seul' => 138, 'ouvrir_candidature_hors_ligne' => 139, 'ouvrir_offre_hors_ligne' => 140, 'ouvrir_offre_technique_hors_ligne' => 141, 'ouvrir_anonymat_hors_ligne' => 142, 'espace_collaboratif_gestionnaire' => 143, 'espace_collaboratif_contributeur' => 144, 'gerer_organismes' => 145, 'gerer_associations_agents' => 146, 'module_redaction_uniquement' => 147, 'historique_navigation_inscrits' => 148, 'telecharger_accords_cadres' => 149, 'creer_annonce_decision_resiliation' => 150, 'creer_annonce_synthese_rapport_audit' => 151, 'gerer_operations' => 152, 'telecharger_siret_acheteur' => 153, 'gerer_reouvertures_modification' => 154, 'envoyer_demande_validation' => 155, 'suivre_consultation_organisme' => 156, 'renseigner_montant' => 157, 'gestion_referentiel_contact' => 158, 'gerer_cao' => 159, 'validation_acces_facture' => 160, 'gestion_travaux_cao' => 161, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, 126, 127, 128, 129, 130, 131, 132, 133, 134, 135, 136, 137, 138, 139, 140, 141, 142, 143, 144, 145, 146, 147, 148, 149, 150, 151, 152, 153, 154, 155, 156, 157, 158, 159, 160, 161, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonHabilitationAgentPeer::GESTION_AGENT_POLE => array(
            CommonHabilitationAgentPeer::GESTION_AGENT_POLE_0,
            CommonHabilitationAgentPeer::GESTION_AGENT_POLE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX => array(
            CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX_0,
            CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX_1,
        ),
        CommonHabilitationAgentPeer::GESTION_BI_CLES => array(
            CommonHabilitationAgentPeer::GESTION_BI_CLES_0,
            CommonHabilitationAgentPeer::GESTION_BI_CLES_1,
        ),
        CommonHabilitationAgentPeer::CREER_CONSULTATION => array(
            CommonHabilitationAgentPeer::CREER_CONSULTATION_0,
            CommonHabilitationAgentPeer::CREER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::VALIDER_CONSULTATION => array(
            CommonHabilitationAgentPeer::VALIDER_CONSULTATION_0,
            CommonHabilitationAgentPeer::VALIDER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::PUBLIER_CONSULTATION => array(
            CommonHabilitationAgentPeer::PUBLIER_CONSULTATION_0,
            CommonHabilitationAgentPeer::PUBLIER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::SUIVRE_CONSULTATION => array(
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_0,
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE => array(
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE_0,
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE_1,
        ),
        CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE => array(
            CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE_0,
            CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE_1,
        ),
        CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION => array(
            CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION_0,
            CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE => array(
            CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE_0,
            CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE_1,
        ),
        CommonHabilitationAgentPeer::DEPOUILLER_OFFRE => array(
            CommonHabilitationAgentPeer::DEPOUILLER_OFFRE_0,
            CommonHabilitationAgentPeer::DEPOUILLER_OFFRE_1,
        ),
        CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE => array(
            CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE_0,
            CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::GERER_ENCHERES => array(
            CommonHabilitationAgentPeer::GERER_ENCHERES_0,
            CommonHabilitationAgentPeer::GERER_ENCHERES_1,
        ),
        CommonHabilitationAgentPeer::SUIVRE_ENCHERES => array(
            CommonHabilitationAgentPeer::SUIVRE_ENCHERES_0,
            CommonHabilitationAgentPeer::SUIVRE_ENCHERES_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_ENTREPRISE => array(
            CommonHabilitationAgentPeer::SUIVI_ENTREPRISE_0,
            CommonHabilitationAgentPeer::SUIVI_ENTREPRISE_1,
        ),
        CommonHabilitationAgentPeer::ENVOI_BOAMP => array(
            CommonHabilitationAgentPeer::ENVOI_BOAMP_0,
            CommonHabilitationAgentPeer::ENVOI_BOAMP_1,
        ),
        CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT => array(
            CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT_0,
            CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT_1,
        ),
        CommonHabilitationAgentPeer::CONNECTEUR_SIS => array(
            CommonHabilitationAgentPeer::CONNECTEUR_SIS_0,
            CommonHabilitationAgentPeer::CONNECTEUR_SIS_1,
        ),
        CommonHabilitationAgentPeer::CONNECTEUR_MARCO => array(
            CommonHabilitationAgentPeer::CONNECTEUR_MARCO_0,
            CommonHabilitationAgentPeer::CONNECTEUR_MARCO_1,
        ),
        CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS => array(
            CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS_0,
            CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS_1,
        ),
        CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION => array(
            CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION_0,
            CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION_1,
        ),
        CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO => array(
            CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO_0,
            CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO_1,
        ),
        CommonHabilitationAgentPeer::NOTIFICATION_BOAMP => array(
            CommonHabilitationAgentPeer::NOTIFICATION_BOAMP_0,
            CommonHabilitationAgentPeer::NOTIFICATION_BOAMP_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_COMPTE => array(
            CommonHabilitationAgentPeer::ADMINISTRER_COMPTE_0,
            CommonHabilitationAgentPeer::ADMINISTRER_COMPTE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_MAPA => array(
            CommonHabilitationAgentPeer::GESTION_MAPA_0,
            CommonHabilitationAgentPeer::GESTION_MAPA_1,
        ),
        CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION => array(
            CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION_0,
            CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::APPROUVER_CONSULTATION => array(
            CommonHabilitationAgentPeer::APPROUVER_CONSULTATION_0,
            CommonHabilitationAgentPeer::APPROUVER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE => array(
            CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE_0,
            CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE_1,
        ),
        CommonHabilitationAgentPeer::RESTREINDRE_CREATION => array(
            CommonHabilitationAgentPeer::RESTREINDRE_CREATION_0,
            CommonHabilitationAgentPeer::RESTREINDRE_CREATION_1,
        ),
        CommonHabilitationAgentPeer::CREER_LISTE_MARCHES => array(
            CommonHabilitationAgentPeer::CREER_LISTE_MARCHES_0,
            CommonHabilitationAgentPeer::CREER_LISTE_MARCHES_1,
        ),
        CommonHabilitationAgentPeer::GESTION_COMMISSIONS => array(
            CommonHabilitationAgentPeer::GESTION_COMMISSIONS_0,
            CommonHabilitationAgentPeer::GESTION_COMMISSIONS_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE => array(
            CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE_0,
            CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE_1,
        ),
        CommonHabilitationAgentPeer::FICHE_RECENSEMENT => array(
            CommonHabilitationAgentPeer::FICHE_RECENSEMENT_0,
            CommonHabilitationAgentPeer::FICHE_RECENSEMENT_1,
        ),
        CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX => array(
            CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX_0,
            CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX_1,
        ),
        CommonHabilitationAgentPeer::DECLARER_SANS_SUITE => array(
            CommonHabilitationAgentPeer::DECLARER_SANS_SUITE_0,
            CommonHabilitationAgentPeer::DECLARER_SANS_SUITE_1,
        ),
        CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE => array(
            CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE_0,
            CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE => array(
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE_0,
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE_1,
        ),
        CommonHabilitationAgentPeer::REFUSER_ENVELOPPE => array(
            CommonHabilitationAgentPeer::REFUSER_ENVELOPPE_0,
            CommonHabilitationAgentPeer::REFUSER_ENVELOPPE_1,
        ),
        CommonHabilitationAgentPeer::GERER_ADMISSIBILITE => array(
            CommonHabilitationAgentPeer::GERER_ADMISSIBILITE_0,
            CommonHabilitationAgentPeer::GERER_ADMISSIBILITE_1,
        ),
        CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE => array(
            CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE_0,
            CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP => array(
            CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP_0,
            CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP_1,
        ),
        CommonHabilitationAgentPeer::GESTION_AGENTS => array(
            CommonHabilitationAgentPeer::GESTION_AGENTS_0,
            CommonHabilitationAgentPeer::GESTION_AGENTS_1,
        ),
        CommonHabilitationAgentPeer::GESTION_HABILITATIONS => array(
            CommonHabilitationAgentPeer::GESTION_HABILITATIONS_0,
            CommonHabilitationAgentPeer::GESTION_HABILITATIONS_1,
        ),
        CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT => array(
            CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT_0,
            CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT_1,
        ),
        CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT => array(
            CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT_0,
            CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REPONSES => array(
            CommonHabilitationAgentPeer::ACCES_REPONSES_0,
            CommonHabilitationAgentPeer::ACCES_REPONSES_1,
        ),
        CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES => array(
            CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_0,
            CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES_1,
        ),
        CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES => array(
            CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_0,
            CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION_1,
        ),
        CommonHabilitationAgentPeer::SAISIE_MARCHES => array(
            CommonHabilitationAgentPeer::SAISIE_MARCHES_0,
            CommonHabilitationAgentPeer::SAISIE_MARCHES_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_MARCHES => array(
            CommonHabilitationAgentPeer::VALIDATION_MARCHES_0,
            CommonHabilitationAgentPeer::VALIDATION_MARCHES_1,
        ),
        CommonHabilitationAgentPeer::PUBLICATION_MARCHES => array(
            CommonHabilitationAgentPeer::PUBLICATION_MARCHES_0,
            CommonHabilitationAgentPeer::PUBLICATION_MARCHES_1,
        ),
        CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER => array(
            CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER_0,
            CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER_1,
        ),
        CommonHabilitationAgentPeer::GERER_ARCHIVES => array(
            CommonHabilitationAgentPeer::GERER_ARCHIVES_0,
            CommonHabilitationAgentPeer::GERER_ARCHIVES_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES => array(
            CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES_0,
            CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_SIMPLE => array(
            CommonHabilitationAgentPeer::VALIDATION_SIMPLE_0,
            CommonHabilitationAgentPeer::VALIDATION_SIMPLE_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE => array(
            CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE_0,
            CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_FINALE => array(
            CommonHabilitationAgentPeer::VALIDATION_FINALE_0,
            CommonHabilitationAgentPeer::VALIDATION_FINALE_1,
        ),
        CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION => array(
            CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION_0,
            CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::HYPER_ADMIN => array(
            CommonHabilitationAgentPeer::HYPER_ADMIN_0,
            CommonHabilitationAgentPeer::HYPER_ADMIN_1,
        ),
        CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES => array(
            CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES_0,
            CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_ACCES => array(
            CommonHabilitationAgentPeer::SUIVI_ACCES_0,
            CommonHabilitationAgentPeer::SUIVI_ACCES_1,
        ),
        CommonHabilitationAgentPeer::STATISTIQUES_SITE => array(
            CommonHabilitationAgentPeer::STATISTIQUES_SITE_0,
            CommonHabilitationAgentPeer::STATISTIQUES_SITE_1,
        ),
        CommonHabilitationAgentPeer::STATISTIQUES_QOS => array(
            CommonHabilitationAgentPeer::STATISTIQUES_QOS_0,
            CommonHabilitationAgentPeer::STATISTIQUES_QOS_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE => array(
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE_0,
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_COMPTE_JAL => array(
            CommonHabilitationAgentPeer::GESTION_COMPTE_JAL_0,
            CommonHabilitationAgentPeer::GESTION_COMPTE_JAL_1,
        ),
        CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB => array(
            CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB_0,
            CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB_1,
        ),
        CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR => array(
            CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR_0,
            CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE_1,
        ),
        CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE => array(
            CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE_0,
            CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE_1,
        ),
        CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE => array(
            CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE_0,
            CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE => array(
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_0,
            CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION => array(
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_0,
            CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES => array(
            CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES_0,
            CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES_1,
        ),
        CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES => array(
            CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_0,
            CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES => array(
            CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_0,
            CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES_1,
        ),
        CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES => array(
            CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES_0,
            CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES => array(
            CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES_0,
            CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES_1,
        ),
        CommonHabilitationAgentPeer::RESULTAT_ANALYSE => array(
            CommonHabilitationAgentPeer::RESULTAT_ANALYSE_0,
            CommonHabilitationAgentPeer::RESULTAT_ANALYSE_1,
        ),
        CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE => array(
            CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE_0,
            CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE_1,
        ),
        CommonHabilitationAgentPeer::GERER_MON_SERVICE => array(
            CommonHabilitationAgentPeer::GERER_MON_SERVICE_0,
            CommonHabilitationAgentPeer::GERER_MON_SERVICE_1,
        ),
        CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES => array(
            CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES_0,
            CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT_1,
        ),
        CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT => array(
            CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT_0,
            CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT_1,
        ),
        CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL => array(
            CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL_0,
            CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL_1,
        ),
        CommonHabilitationAgentPeer::ANNULER_CONSULTATION => array(
            CommonHabilitationAgentPeer::ANNULER_CONSULTATION_0,
            CommonHabilitationAgentPeer::ANNULER_CONSULTATION_1,
        ),
        CommonHabilitationAgentPeer::ENVOYER_PUBLICITE => array(
            CommonHabilitationAgentPeer::ENVOYER_PUBLICITE_0,
            CommonHabilitationAgentPeer::ENVOYER_PUBLICITE_1,
        ),
        CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES => array(
            CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES_0,
            CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES_1,
        ),
        CommonHabilitationAgentPeer::SUIVRE_MESSAGE => array(
            CommonHabilitationAgentPeer::SUIVRE_MESSAGE_0,
            CommonHabilitationAgentPeer::SUIVRE_MESSAGE_1,
        ),
        CommonHabilitationAgentPeer::ENVOYER_MESSAGE => array(
            CommonHabilitationAgentPeer::ENVOYER_MESSAGE_0,
            CommonHabilitationAgentPeer::ENVOYER_MESSAGE_1,
        ),
        CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL => array(
            CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL_0,
            CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL_1,
        ),
        CommonHabilitationAgentPeer::GESTION_MANDATAIRE => array(
            CommonHabilitationAgentPeer::GESTION_MANDATAIRE_0,
            CommonHabilitationAgentPeer::GESTION_MANDATAIRE_1,
        ),
        CommonHabilitationAgentPeer::GERER_NEWSLETTER => array(
            CommonHabilitationAgentPeer::GERER_NEWSLETTER_0,
            CommonHabilitationAgentPeer::GERER_NEWSLETTER_1,
        ),
        CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE => array(
            CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE_0,
            CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL => array(
            CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL_0,
            CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL => array(
            CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL_0,
            CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL_1,
        ),
        CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC => array(
            CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC_0,
            CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC => array(
            CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC_0,
            CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC_1,
        ),
        CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE => array(
            CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE_0,
            CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE_1,
        ),
        CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR => array(
            CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR_0,
            CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR_1,
        ),
        CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE => array(
            CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE_0,
            CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES => array(
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_0,
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_1,
        ),
        CommonHabilitationAgentPeer::VALIDER_CLAUSES => array(
            CommonHabilitationAgentPeer::VALIDER_CLAUSES_0,
            CommonHabilitationAgentPeer::VALIDER_CLAUSES_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS => array(
            CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_0,
            CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_1,
        ),
        CommonHabilitationAgentPeer::VALIDER_CANEVAS => array(
            CommonHabilitationAgentPeer::VALIDER_CANEVAS_0,
            CommonHabilitationAgentPeer::VALIDER_CANEVAS_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS => array(
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS_0,
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS_1,
        ),
        CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT => array(
            CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT_0,
            CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT_1,
        ),
        CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR => array(
            CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR_0,
            CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR => array(
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR_0,
            CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR_1,
        ),
        CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR => array(
            CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR_0,
            CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR_1,
        ),
        CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR => array(
            CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR_0,
            CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR_1,
        ),
        CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR => array(
            CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR_0,
            CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR_1,
        ),
        CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL => array(
            CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL_0,
            CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE => array(
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE_0,
            CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE_1,
        ),
        CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE => array(
            CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE_0,
            CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE_1,
        ),
        CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR => array(
            CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR_0,
            CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR_1,
        ),
        CommonHabilitationAgentPeer::GERER_ORGANISMES => array(
            CommonHabilitationAgentPeer::GERER_ORGANISMES_0,
            CommonHabilitationAgentPeer::GERER_ORGANISMES_1,
        ),
        CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS => array(
            CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS_0,
            CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS_1,
        ),
        CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT => array(
            CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT_0,
            CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT_1,
        ),
        CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS => array(
            CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS_0,
            CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS_1,
        ),
        CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES => array(
            CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES_0,
            CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION_1,
        ),
        CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT => array(
            CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_0,
            CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT_1,
        ),
        CommonHabilitationAgentPeer::GERER_OPERATIONS => array(
            CommonHabilitationAgentPeer::GERER_OPERATIONS_0,
            CommonHabilitationAgentPeer::GERER_OPERATIONS_1,
        ),
        CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR => array(
            CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR_0,
            CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR_1,
        ),
        CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION => array(
            CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION_0,
            CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION_1,
        ),
        CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION => array(
            CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION_0,
            CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION_1,
        ),
        CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME => array(
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME_0,
            CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME_1,
        ),
        CommonHabilitationAgentPeer::RENSEIGNER_MONTANT => array(
            CommonHabilitationAgentPeer::RENSEIGNER_MONTANT_0,
            CommonHabilitationAgentPeer::RENSEIGNER_MONTANT_1,
        ),
        CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT => array(
            CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT_0,
            CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT_1,
        ),
        CommonHabilitationAgentPeer::GERER_CAO => array(
            CommonHabilitationAgentPeer::GERER_CAO_0,
            CommonHabilitationAgentPeer::GERER_CAO_1,
        ),
        CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE => array(
            CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE_0,
            CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE_1,
        ),
        CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO => array(
            CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO_0,
            CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO_1,
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
        $toNames = CommonHabilitationAgentPeer::getFieldNames($toType);
        $key = isset(CommonHabilitationAgentPeer::$fieldKeys[$fromType][$name]) ? CommonHabilitationAgentPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonHabilitationAgentPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonHabilitationAgentPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonHabilitationAgentPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonHabilitationAgentPeer::$enumValueSets;
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
        $valueSets = CommonHabilitationAgentPeer::getValueSets();

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
        $values = CommonHabilitationAgentPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonHabilitationAgentPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonHabilitationAgentPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ID_AGENT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_AGENT_POLE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_FOURNISSEURS_ENVOIS_POSTAUX);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_BI_CLES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::PUBLIER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_POLE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUPPRIMER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUPPRIMER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DEPOUILLER_CANDIDATURE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DEPOUILLER_OFFRE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MESSAGERIE_SECURISEE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ENCHERES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVRE_ENCHERES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_ENTREPRISE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ENVOI_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_CLASSEMENT_LOT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CONNECTEUR_SIS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CONNECTEUR_MARCO);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::REPONDRE_AUX_QUESTIONS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::APPEL_PROJET_FORMATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::UTILISER_CLIENT_CAO);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::NOTIFICATION_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_COMPTE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_MAPA);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_TYPE_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::APPROUVER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::RESTREINDRE_CREATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_LISTE_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_COMMISSIONS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ATTRIBUTION_MARCHE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::FICHE_RECENSEMENT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DECLARER_INFRUCTUEUX);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DECLARER_SANS_SUITE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_CONSULTATION_TRANSVERSE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::REFUSER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ADMISSIBILITE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::RESTAURER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_COMPTE_BOAMP);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_AGENTS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_HABILITATIONS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_MAPA_INFERIEUR_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_MAPA_SUPERIEUR_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_AVANT_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REPONSES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::TELECHARGEMENT_GROUPE_ANTICIPE_PLIS_CHIFFRES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::TELECHARGEMENT_UNITAIRE_PLIS_CHIFFRES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_INFORMATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SAISIE_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::PUBLICATION_MARCHES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_STATISTIQUES_METIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ARCHIVES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_PROCEDURES_FORMALISEES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_ATTRIBUTION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_RETRAITS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_QUESTIONS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACCES_REGISTRE_DEPOTS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_SIMPLE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_INTERMEDIAIRE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_FINALE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_SUITE_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::HYPER_ADMIN);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DROIT_GESTION_SERVICES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_ACCES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::STATISTIQUES_SITE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::STATISTIQUES_QOS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_COMPTE_JAL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_CENTRALE_PUB);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_COMPTE_GROUPE_MONITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_EN_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_A_DISTANCE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ACTIVATION_COMPTE_ENTREPRISE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::IMPORTER_ENVELOPPE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_PAPIER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_DEPOTS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_RETRAITS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_SEUL_REGISTRE_QUESTIONS_ELECTRONIQUE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_INFERIEUR_MONTANT_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_MAPA_SUPERIEUR_MONTANT_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_CONSULTATION_PROCEDURES_FORMALISEES_APRES_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_LES_ENTREPRISES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::PORTEE_SOCIETES_EXCLUES_TOUS_ORGANISMES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODIFIER_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUPPRIMER_SOCIETES_EXCLUES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::RESULTAT_ANALYSE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ADRESSES_SERVICE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_MON_SERVICE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DOWNLOAD_ARCHIVES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_EXTRAIT_PV);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_RAPPORT_ACHEVEMENT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_CERTIFICATS_AGENT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_AVIS_PROGRAMME_PREVISIONNEL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ANNULER_CONSULTATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ENVOYER_PUBLICITE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::LISTE_MARCHES_NOTIFIES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVRE_MESSAGE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ENVOYER_MESSAGE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVI_FLUX_CHORUS_TRANSVERSAL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_MANDATAIRE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_NEWSLETTER);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_MODELES_FORMULAIRE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_ADRESSES_FACTURATION_JAL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_ADRESSES_FACTURATION_JAL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::REDACTION_DOCUMENTS_REDAC);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_DOCUMENTS_REDAC);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_MISE_DISPOSITION_PIECES_MARCHE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ANNUAIRE_ACHETEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::REPRENDRE_INTEGRALEMENT_ARTICLE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDER_CLAUSES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDER_CANEVAS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_ENTITE_ACHATS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GENERER_PIECES_FORMAT_ODT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::PUBLIER_VERSION_CLAUSIER_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_CLAUSES_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDER_CLAUSES_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ADMINISTRER_CANEVAS_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDER_CANEVAS_EDITEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::DECISION_SUIVI_SEUL);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_CANDIDATURE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_OFFRE_TECHNIQUE_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::OUVRIR_ANONYMAT_HORS_LIGNE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_GESTIONNAIRE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ESPACE_COLLABORATIF_CONTRIBUTEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ORGANISMES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_ASSOCIATIONS_AGENTS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::MODULE_REDACTION_UNIQUEMENT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::HISTORIQUE_NAVIGATION_INSCRITS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::TELECHARGER_ACCORDS_CADRES);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_DECISION_RESILIATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::CREER_ANNONCE_SYNTHESE_RAPPORT_AUDIT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_OPERATIONS);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::TELECHARGER_SIRET_ACHETEUR);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_REOUVERTURES_MODIFICATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::ENVOYER_DEMANDE_VALIDATION);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::SUIVRE_CONSULTATION_ORGANISME);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::RENSEIGNER_MONTANT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_REFERENTIEL_CONTACT);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GERER_CAO);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::VALIDATION_ACCES_FACTURE);
            $criteria->addSelectColumn(CommonHabilitationAgentPeer::GESTION_TRAVAUX_CAO);
        } else {
            $criteria->addSelectColumn($alias . '.id_agent');
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
            $criteria->addSelectColumn($alias . '.ouvrir_anonymat_en_ligne');
            $criteria->addSelectColumn($alias . '.ouvrir_offre_en_ligne');
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
            $criteria->addSelectColumn($alias . '.gerer_cao');
            $criteria->addSelectColumn($alias . '.validation_acces_facture');
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
        $criteria->setPrimaryTableName(CommonHabilitationAgentPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonHabilitationAgentPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonHabilitationAgentPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonHabilitationAgent
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonHabilitationAgentPeer::doSelect($critcopy, $con);
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
        return CommonHabilitationAgentPeer::populateObjects(CommonHabilitationAgentPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonHabilitationAgentPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationAgentPeer::DATABASE_NAME);

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
     * @param      CommonHabilitationAgent $obj A CommonHabilitationAgent object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdAgent();
            } // if key === null
            CommonHabilitationAgentPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonHabilitationAgent object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonHabilitationAgent) {
                $key = (string) $value->getIdAgent();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonHabilitationAgent object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonHabilitationAgentPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonHabilitationAgent Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonHabilitationAgentPeer::$instances[$key])) {
                return CommonHabilitationAgentPeer::$instances[$key];
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
        foreach (CommonHabilitationAgentPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonHabilitationAgentPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to HabilitationAgent
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
        $cls = CommonHabilitationAgentPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonHabilitationAgentPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonHabilitationAgentPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonHabilitationAgentPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonHabilitationAgent object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonHabilitationAgentPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonHabilitationAgentPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonHabilitationAgentPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonHabilitationAgentPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonHabilitationAgentPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonHabilitationAgentPeer::DATABASE_NAME)->getTable(CommonHabilitationAgentPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonHabilitationAgentPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonHabilitationAgentPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonHabilitationAgentTableMap());
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
        return CommonHabilitationAgentPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonHabilitationAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHabilitationAgent object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonHabilitationAgent object
        }


        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationAgentPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonHabilitationAgent or Criteria object.
     *
     * @param      mixed $values Criteria or CommonHabilitationAgent object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonHabilitationAgentPeer::ID_AGENT);
            $value = $criteria->remove(CommonHabilitationAgentPeer::ID_AGENT);
            if ($value) {
                $selectCriteria->add(CommonHabilitationAgentPeer::ID_AGENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonHabilitationAgentPeer::TABLE_NAME);
            }

        } else { // $values is CommonHabilitationAgent object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonHabilitationAgentPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the HabilitationAgent table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonHabilitationAgentPeer::TABLE_NAME, $con, CommonHabilitationAgentPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonHabilitationAgentPeer::clearInstancePool();
            CommonHabilitationAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonHabilitationAgent or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonHabilitationAgent object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonHabilitationAgentPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonHabilitationAgent) { // it's a model object
            // invalidate the cache for this single object
            CommonHabilitationAgentPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);
            $criteria->add(CommonHabilitationAgentPeer::ID_AGENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonHabilitationAgentPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonHabilitationAgentPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonHabilitationAgentPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonHabilitationAgent object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonHabilitationAgent $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonHabilitationAgentPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonHabilitationAgentPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonHabilitationAgentPeer::DATABASE_NAME, CommonHabilitationAgentPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonHabilitationAgent
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonHabilitationAgentPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);
        $criteria->add(CommonHabilitationAgentPeer::ID_AGENT, $pk);

        $v = CommonHabilitationAgentPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonHabilitationAgent[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonHabilitationAgentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonHabilitationAgentPeer::DATABASE_NAME);
            $criteria->add(CommonHabilitationAgentPeer::ID_AGENT, $pks, Criteria::IN);
            $objs = CommonHabilitationAgentPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonHabilitationAgentPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonHabilitationAgentPeer::buildTableMap();

