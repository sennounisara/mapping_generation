<?php


/**
 * Base static class for performing query and update operations on the 'statistiques' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseStatistiquesPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'statistiques';

    /** the related Propel class for this table */
    const OM_CLASS = 'Statistiques';

    /** the related TableMap class for this table */
    const TM_CLASS = 'StatistiquesTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 43;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 43;

    /** the column name for the ID_STATISTIQUE field */
    const ID_STATISTIQUE = 'statistiques.ID_STATISTIQUE';

    /** the column name for the ANNEE field */
    const ANNEE = 'statistiques.ANNEE';

    /** the column name for the MOIS field */
    const MOIS = 'statistiques.MOIS';

    /** the column name for the DEMANDES_RECUES field */
    const DEMANDES_RECUES = 'statistiques.DEMANDES_RECUES';

    /** the column name for the DEMANDES_RECUES_CUMUL_A_FIN_MOIS field */
    const DEMANDES_RECUES_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_RECUES_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_RECUES_EVOLUTION_PAR_MOIS field */
    const DEMANDES_RECUES_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_RECUES_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_TRAITEES field */
    const DEMANDES_TRAITEES = 'statistiques.DEMANDES_TRAITEES';

    /** the column name for the DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS field */
    const DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS field */
    const DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_CLOTUREES field */
    const DEMANDES_CLOTUREES = 'statistiques.DEMANDES_CLOTUREES';

    /** the column name for the DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS field */
    const DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS field */
    const DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_REPONSES_ENVOYEES field */
    const DEMANDES_REPONSES_ENVOYEES = 'statistiques.DEMANDES_REPONSES_ENVOYEES';

    /** the column name for the DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS field */
    const DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS field */
    const DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_HORS_ATTRIBUTION_ERRONEES field */
    const DEMANDES_HORS_ATTRIBUTION_ERRONEES = 'statistiques.DEMANDES_HORS_ATTRIBUTION_ERRONEES';

    /** the column name for the DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS field */
    const DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS field */
    const DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_EN_COURS field */
    const DEMANDES_EN_COURS = 'statistiques.DEMANDES_EN_COURS';

    /** the column name for the DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS field */
    const DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS field */
    const DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_AFFECTEES_REOUVERTE field */
    const DEMANDES_AFFECTEES_REOUVERTE = 'statistiques.DEMANDES_AFFECTEES_REOUVERTE';

    /** the column name for the DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS field */
    const DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS field */
    const DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS';

    /** the column name for the DEMANDES_EN_PROPOSITION_REPONSE field */
    const DEMANDES_EN_PROPOSITION_REPONSE = 'statistiques.DEMANDES_EN_PROPOSITION_REPONSE';

    /** the column name for the DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS field */
    const DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS = 'statistiques.DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS';

    /** the column name for the DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS field */
    const DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS = 'statistiques.DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS';

    /** the column name for the DELAI_MOYEN_MOIS field */
    const DELAI_MOYEN_MOIS = 'statistiques.DELAI_MOYEN_MOIS';

    /** the column name for the EVOLUTION_DELAI_MOYEN field */
    const EVOLUTION_DELAI_MOYEN = 'statistiques.EVOLUTION_DELAI_MOYEN';

    /** the column name for the DELAI_MINIMAL_MOIS field */
    const DELAI_MINIMAL_MOIS = 'statistiques.DELAI_MINIMAL_MOIS';

    /** the column name for the EVOLUTION_DELAI_MINIMAL field */
    const EVOLUTION_DELAI_MINIMAL = 'statistiques.EVOLUTION_DELAI_MINIMAL';

    /** the column name for the DELAI_MAXIMAL field */
    const DELAI_MAXIMAL = 'statistiques.DELAI_MAXIMAL';

    /** the column name for the EVOLUTION_DELAI_MAXIMAL field */
    const EVOLUTION_DELAI_MAXIMAL = 'statistiques.EVOLUTION_DELAI_MAXIMAL';

    /** the column name for the TAUX_REPONSE field */
    const TAUX_REPONSE = 'statistiques.TAUX_REPONSE';

    /** the column name for the EVOLUTION_TAUX_REPONSE field */
    const EVOLUTION_TAUX_REPONSE = 'statistiques.EVOLUTION_TAUX_REPONSE';

    /** the column name for the TAUX_SATISFACTION_REQUERANTS field */
    const TAUX_SATISFACTION_REQUERANTS = 'statistiques.TAUX_SATISFACTION_REQUERANTS';

    /** the column name for the EVOLUTION_TAUX_SATISFACTION field */
    const EVOLUTION_TAUX_SATISFACTION = 'statistiques.EVOLUTION_TAUX_SATISFACTION';

    /** the column name for the CUMUL_TAUX_SATISFACTION field */
    const CUMUL_TAUX_SATISFACTION = 'statistiques.CUMUL_TAUX_SATISFACTION';

    /** the column name for the DEMANDES_ASSISTANCE_INTERNE field */
    const DEMANDES_ASSISTANCE_INTERNE = 'statistiques.DEMANDES_ASSISTANCE_INTERNE';

    /** the column name for the EVOLUTION_DEMANDE_INTERNE field */
    const EVOLUTION_DEMANDE_INTERNE = 'statistiques.EVOLUTION_DEMANDE_INTERNE';

    /** the column name for the CUMUL_DEMANDE_INTERNE field */
    const CUMUL_DEMANDE_INTERNE = 'statistiques.CUMUL_DEMANDE_INTERNE';

    /** the column name for the DATE_MISE_A_JOUR field */
    const DATE_MISE_A_JOUR = 'statistiques.DATE_MISE_A_JOUR';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 'statistiques.ID_ENTITE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of Statistiques objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Statistiques[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. StatistiquesPeer::$fieldNames[StatistiquesPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdStatistique', 'Annee', 'Mois', 'DemandesRecues', 'DemandesRecuesCumulAFinMois', 'DemandesRecuesEvolutionParMois', 'DemandesTraitees', 'DemandesTraiteesCumulAFinMois', 'DemandesTraiteesEvolutionParMois', 'DemandesCloturees', 'DemandesClotureeCumulAFinMois', 'DemandesClotureeEvolutionParMois', 'DemandesReponsesEnvoyees', 'DemandesReponsesEnvoyeesCumulAFinMois', 'DemandesReponsesEnvoyeesEvolutionParMois', 'DemandesHorsAttributionErronees', 'DemandesHorsAttributionErroneesCumulAFinMois', 'DemandesHorsAttributionErroneesEvolutionParMois', 'DemandesEnCours', 'DemandesEnCoursCumulAFinMois', 'DemandesEnCoursEvolutionParMois', 'DemandesAffecteesReouverte', 'DemandesAffecteesReouverteCumulAFinMois', 'DemandesAffecteesReouverteEvolutionParMois', 'DemandesEnPropositionReponse', 'DemandesEnPropositionReponseCumulAFinMois', 'DemandesEnPropositionReponseEvolutionParMois', 'DelaiMoyenMois', 'EvolutionDelaiMoyen', 'DelaiMinimalMois', 'EvolutionDelaiMinimal', 'DelaiMaximal', 'EvolutionDelaiMaximal', 'TauxReponse', 'EvolutionTauxReponse', 'TauxSatisfactionRequerants', 'EvolutionTauxSatisfaction', 'CumulTauxSatisfaction', 'DemandesAssistanceInterne', 'EvolutionDemandeInterne', 'CumulDemandeInterne', 'DateMiseAJour', 'IdEntite', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idStatistique', 'annee', 'mois', 'demandesRecues', 'demandesRecuesCumulAFinMois', 'demandesRecuesEvolutionParMois', 'demandesTraitees', 'demandesTraiteesCumulAFinMois', 'demandesTraiteesEvolutionParMois', 'demandesCloturees', 'demandesClotureeCumulAFinMois', 'demandesClotureeEvolutionParMois', 'demandesReponsesEnvoyees', 'demandesReponsesEnvoyeesCumulAFinMois', 'demandesReponsesEnvoyeesEvolutionParMois', 'demandesHorsAttributionErronees', 'demandesHorsAttributionErroneesCumulAFinMois', 'demandesHorsAttributionErroneesEvolutionParMois', 'demandesEnCours', 'demandesEnCoursCumulAFinMois', 'demandesEnCoursEvolutionParMois', 'demandesAffecteesReouverte', 'demandesAffecteesReouverteCumulAFinMois', 'demandesAffecteesReouverteEvolutionParMois', 'demandesEnPropositionReponse', 'demandesEnPropositionReponseCumulAFinMois', 'demandesEnPropositionReponseEvolutionParMois', 'delaiMoyenMois', 'evolutionDelaiMoyen', 'delaiMinimalMois', 'evolutionDelaiMinimal', 'delaiMaximal', 'evolutionDelaiMaximal', 'tauxReponse', 'evolutionTauxReponse', 'tauxSatisfactionRequerants', 'evolutionTauxSatisfaction', 'cumulTauxSatisfaction', 'demandesAssistanceInterne', 'evolutionDemandeInterne', 'cumulDemandeInterne', 'dateMiseAJour', 'idEntite', ),
        BasePeer::TYPE_COLNAME => array (StatistiquesPeer::ID_STATISTIQUE, StatistiquesPeer::ANNEE, StatistiquesPeer::MOIS, StatistiquesPeer::DEMANDES_RECUES, StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_TRAITEES, StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_CLOTUREES, StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_EN_COURS, StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS, StatistiquesPeer::DELAI_MOYEN_MOIS, StatistiquesPeer::EVOLUTION_DELAI_MOYEN, StatistiquesPeer::DELAI_MINIMAL_MOIS, StatistiquesPeer::EVOLUTION_DELAI_MINIMAL, StatistiquesPeer::DELAI_MAXIMAL, StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL, StatistiquesPeer::TAUX_REPONSE, StatistiquesPeer::EVOLUTION_TAUX_REPONSE, StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS, StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION, StatistiquesPeer::CUMUL_TAUX_SATISFACTION, StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE, StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE, StatistiquesPeer::CUMUL_DEMANDE_INTERNE, StatistiquesPeer::DATE_MISE_A_JOUR, StatistiquesPeer::ID_ENTITE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_STATISTIQUE', 'ANNEE', 'MOIS', 'DEMANDES_RECUES', 'DEMANDES_RECUES_CUMUL_A_FIN_MOIS', 'DEMANDES_RECUES_EVOLUTION_PAR_MOIS', 'DEMANDES_TRAITEES', 'DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS', 'DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS', 'DEMANDES_CLOTUREES', 'DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS', 'DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS', 'DEMANDES_REPONSES_ENVOYEES', 'DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS', 'DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS', 'DEMANDES_EN_COURS', 'DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS', 'DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS', 'DEMANDES_AFFECTEES_REOUVERTE', 'DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS', 'DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS', 'DEMANDES_EN_PROPOSITION_REPONSE', 'DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS', 'DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS', 'DELAI_MOYEN_MOIS', 'EVOLUTION_DELAI_MOYEN', 'DELAI_MINIMAL_MOIS', 'EVOLUTION_DELAI_MINIMAL', 'DELAI_MAXIMAL', 'EVOLUTION_DELAI_MAXIMAL', 'TAUX_REPONSE', 'EVOLUTION_TAUX_REPONSE', 'TAUX_SATISFACTION_REQUERANTS', 'EVOLUTION_TAUX_SATISFACTION', 'CUMUL_TAUX_SATISFACTION', 'DEMANDES_ASSISTANCE_INTERNE', 'EVOLUTION_DEMANDE_INTERNE', 'CUMUL_DEMANDE_INTERNE', 'DATE_MISE_A_JOUR', 'ID_ENTITE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_STATISTIQUE', 'ANNEE', 'MOIS', 'DEMANDES_RECUES', 'DEMANDES_RECUES_CUMUL_A_FIN_MOIS', 'DEMANDES_RECUES_EVOLUTION_PAR_MOIS', 'DEMANDES_TRAITEES', 'DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS', 'DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS', 'DEMANDES_CLOTUREES', 'DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS', 'DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS', 'DEMANDES_REPONSES_ENVOYEES', 'DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS', 'DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS', 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS', 'DEMANDES_EN_COURS', 'DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS', 'DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS', 'DEMANDES_AFFECTEES_REOUVERTE', 'DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS', 'DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS', 'DEMANDES_EN_PROPOSITION_REPONSE', 'DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS', 'DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS', 'DELAI_MOYEN_MOIS', 'EVOLUTION_DELAI_MOYEN', 'DELAI_MINIMAL_MOIS', 'EVOLUTION_DELAI_MINIMAL', 'DELAI_MAXIMAL', 'EVOLUTION_DELAI_MAXIMAL', 'TAUX_REPONSE', 'EVOLUTION_TAUX_REPONSE', 'TAUX_SATISFACTION_REQUERANTS', 'EVOLUTION_TAUX_SATISFACTION', 'CUMUL_TAUX_SATISFACTION', 'DEMANDES_ASSISTANCE_INTERNE', 'EVOLUTION_DEMANDE_INTERNE', 'CUMUL_DEMANDE_INTERNE', 'DATE_MISE_A_JOUR', 'ID_ENTITE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. StatistiquesPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdStatistique' => 0, 'Annee' => 1, 'Mois' => 2, 'DemandesRecues' => 3, 'DemandesRecuesCumulAFinMois' => 4, 'DemandesRecuesEvolutionParMois' => 5, 'DemandesTraitees' => 6, 'DemandesTraiteesCumulAFinMois' => 7, 'DemandesTraiteesEvolutionParMois' => 8, 'DemandesCloturees' => 9, 'DemandesClotureeCumulAFinMois' => 10, 'DemandesClotureeEvolutionParMois' => 11, 'DemandesReponsesEnvoyees' => 12, 'DemandesReponsesEnvoyeesCumulAFinMois' => 13, 'DemandesReponsesEnvoyeesEvolutionParMois' => 14, 'DemandesHorsAttributionErronees' => 15, 'DemandesHorsAttributionErroneesCumulAFinMois' => 16, 'DemandesHorsAttributionErroneesEvolutionParMois' => 17, 'DemandesEnCours' => 18, 'DemandesEnCoursCumulAFinMois' => 19, 'DemandesEnCoursEvolutionParMois' => 20, 'DemandesAffecteesReouverte' => 21, 'DemandesAffecteesReouverteCumulAFinMois' => 22, 'DemandesAffecteesReouverteEvolutionParMois' => 23, 'DemandesEnPropositionReponse' => 24, 'DemandesEnPropositionReponseCumulAFinMois' => 25, 'DemandesEnPropositionReponseEvolutionParMois' => 26, 'DelaiMoyenMois' => 27, 'EvolutionDelaiMoyen' => 28, 'DelaiMinimalMois' => 29, 'EvolutionDelaiMinimal' => 30, 'DelaiMaximal' => 31, 'EvolutionDelaiMaximal' => 32, 'TauxReponse' => 33, 'EvolutionTauxReponse' => 34, 'TauxSatisfactionRequerants' => 35, 'EvolutionTauxSatisfaction' => 36, 'CumulTauxSatisfaction' => 37, 'DemandesAssistanceInterne' => 38, 'EvolutionDemandeInterne' => 39, 'CumulDemandeInterne' => 40, 'DateMiseAJour' => 41, 'IdEntite' => 42, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idStatistique' => 0, 'annee' => 1, 'mois' => 2, 'demandesRecues' => 3, 'demandesRecuesCumulAFinMois' => 4, 'demandesRecuesEvolutionParMois' => 5, 'demandesTraitees' => 6, 'demandesTraiteesCumulAFinMois' => 7, 'demandesTraiteesEvolutionParMois' => 8, 'demandesCloturees' => 9, 'demandesClotureeCumulAFinMois' => 10, 'demandesClotureeEvolutionParMois' => 11, 'demandesReponsesEnvoyees' => 12, 'demandesReponsesEnvoyeesCumulAFinMois' => 13, 'demandesReponsesEnvoyeesEvolutionParMois' => 14, 'demandesHorsAttributionErronees' => 15, 'demandesHorsAttributionErroneesCumulAFinMois' => 16, 'demandesHorsAttributionErroneesEvolutionParMois' => 17, 'demandesEnCours' => 18, 'demandesEnCoursCumulAFinMois' => 19, 'demandesEnCoursEvolutionParMois' => 20, 'demandesAffecteesReouverte' => 21, 'demandesAffecteesReouverteCumulAFinMois' => 22, 'demandesAffecteesReouverteEvolutionParMois' => 23, 'demandesEnPropositionReponse' => 24, 'demandesEnPropositionReponseCumulAFinMois' => 25, 'demandesEnPropositionReponseEvolutionParMois' => 26, 'delaiMoyenMois' => 27, 'evolutionDelaiMoyen' => 28, 'delaiMinimalMois' => 29, 'evolutionDelaiMinimal' => 30, 'delaiMaximal' => 31, 'evolutionDelaiMaximal' => 32, 'tauxReponse' => 33, 'evolutionTauxReponse' => 34, 'tauxSatisfactionRequerants' => 35, 'evolutionTauxSatisfaction' => 36, 'cumulTauxSatisfaction' => 37, 'demandesAssistanceInterne' => 38, 'evolutionDemandeInterne' => 39, 'cumulDemandeInterne' => 40, 'dateMiseAJour' => 41, 'idEntite' => 42, ),
        BasePeer::TYPE_COLNAME => array (StatistiquesPeer::ID_STATISTIQUE => 0, StatistiquesPeer::ANNEE => 1, StatistiquesPeer::MOIS => 2, StatistiquesPeer::DEMANDES_RECUES => 3, StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS => 4, StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS => 5, StatistiquesPeer::DEMANDES_TRAITEES => 6, StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS => 7, StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS => 8, StatistiquesPeer::DEMANDES_CLOTUREES => 9, StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS => 10, StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS => 11, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES => 12, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS => 13, StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS => 14, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES => 15, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS => 16, StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS => 17, StatistiquesPeer::DEMANDES_EN_COURS => 18, StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS => 19, StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS => 20, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE => 21, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS => 22, StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS => 23, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE => 24, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS => 25, StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS => 26, StatistiquesPeer::DELAI_MOYEN_MOIS => 27, StatistiquesPeer::EVOLUTION_DELAI_MOYEN => 28, StatistiquesPeer::DELAI_MINIMAL_MOIS => 29, StatistiquesPeer::EVOLUTION_DELAI_MINIMAL => 30, StatistiquesPeer::DELAI_MAXIMAL => 31, StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL => 32, StatistiquesPeer::TAUX_REPONSE => 33, StatistiquesPeer::EVOLUTION_TAUX_REPONSE => 34, StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS => 35, StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION => 36, StatistiquesPeer::CUMUL_TAUX_SATISFACTION => 37, StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE => 38, StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE => 39, StatistiquesPeer::CUMUL_DEMANDE_INTERNE => 40, StatistiquesPeer::DATE_MISE_A_JOUR => 41, StatistiquesPeer::ID_ENTITE => 42, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_STATISTIQUE' => 0, 'ANNEE' => 1, 'MOIS' => 2, 'DEMANDES_RECUES' => 3, 'DEMANDES_RECUES_CUMUL_A_FIN_MOIS' => 4, 'DEMANDES_RECUES_EVOLUTION_PAR_MOIS' => 5, 'DEMANDES_TRAITEES' => 6, 'DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS' => 7, 'DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS' => 8, 'DEMANDES_CLOTUREES' => 9, 'DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS' => 10, 'DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS' => 11, 'DEMANDES_REPONSES_ENVOYEES' => 12, 'DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS' => 13, 'DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS' => 14, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES' => 15, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS' => 16, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS' => 17, 'DEMANDES_EN_COURS' => 18, 'DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS' => 19, 'DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS' => 20, 'DEMANDES_AFFECTEES_REOUVERTE' => 21, 'DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS' => 22, 'DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS' => 23, 'DEMANDES_EN_PROPOSITION_REPONSE' => 24, 'DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS' => 25, 'DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS' => 26, 'DELAI_MOYEN_MOIS' => 27, 'EVOLUTION_DELAI_MOYEN' => 28, 'DELAI_MINIMAL_MOIS' => 29, 'EVOLUTION_DELAI_MINIMAL' => 30, 'DELAI_MAXIMAL' => 31, 'EVOLUTION_DELAI_MAXIMAL' => 32, 'TAUX_REPONSE' => 33, 'EVOLUTION_TAUX_REPONSE' => 34, 'TAUX_SATISFACTION_REQUERANTS' => 35, 'EVOLUTION_TAUX_SATISFACTION' => 36, 'CUMUL_TAUX_SATISFACTION' => 37, 'DEMANDES_ASSISTANCE_INTERNE' => 38, 'EVOLUTION_DEMANDE_INTERNE' => 39, 'CUMUL_DEMANDE_INTERNE' => 40, 'DATE_MISE_A_JOUR' => 41, 'ID_ENTITE' => 42, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_STATISTIQUE' => 0, 'ANNEE' => 1, 'MOIS' => 2, 'DEMANDES_RECUES' => 3, 'DEMANDES_RECUES_CUMUL_A_FIN_MOIS' => 4, 'DEMANDES_RECUES_EVOLUTION_PAR_MOIS' => 5, 'DEMANDES_TRAITEES' => 6, 'DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS' => 7, 'DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS' => 8, 'DEMANDES_CLOTUREES' => 9, 'DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS' => 10, 'DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS' => 11, 'DEMANDES_REPONSES_ENVOYEES' => 12, 'DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS' => 13, 'DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS' => 14, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES' => 15, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS' => 16, 'DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS' => 17, 'DEMANDES_EN_COURS' => 18, 'DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS' => 19, 'DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS' => 20, 'DEMANDES_AFFECTEES_REOUVERTE' => 21, 'DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS' => 22, 'DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS' => 23, 'DEMANDES_EN_PROPOSITION_REPONSE' => 24, 'DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS' => 25, 'DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS' => 26, 'DELAI_MOYEN_MOIS' => 27, 'EVOLUTION_DELAI_MOYEN' => 28, 'DELAI_MINIMAL_MOIS' => 29, 'EVOLUTION_DELAI_MINIMAL' => 30, 'DELAI_MAXIMAL' => 31, 'EVOLUTION_DELAI_MAXIMAL' => 32, 'TAUX_REPONSE' => 33, 'EVOLUTION_TAUX_REPONSE' => 34, 'TAUX_SATISFACTION_REQUERANTS' => 35, 'EVOLUTION_TAUX_SATISFACTION' => 36, 'CUMUL_TAUX_SATISFACTION' => 37, 'DEMANDES_ASSISTANCE_INTERNE' => 38, 'EVOLUTION_DEMANDE_INTERNE' => 39, 'CUMUL_DEMANDE_INTERNE' => 40, 'DATE_MISE_A_JOUR' => 41, 'ID_ENTITE' => 42, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, )
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
        $toNames = StatistiquesPeer::getFieldNames($toType);
        $key = isset(StatistiquesPeer::$fieldKeys[$fromType][$name]) ? StatistiquesPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(StatistiquesPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, StatistiquesPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return StatistiquesPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. StatistiquesPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(StatistiquesPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(StatistiquesPeer::ID_STATISTIQUE);
            $criteria->addSelectColumn(StatistiquesPeer::ANNEE);
            $criteria->addSelectColumn(StatistiquesPeer::MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_RECUES);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_RECUES_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_RECUES_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_TRAITEES);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_CLOTUREES);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_COURS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::DELAI_MOYEN_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_DELAI_MOYEN);
            $criteria->addSelectColumn(StatistiquesPeer::DELAI_MINIMAL_MOIS);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_DELAI_MINIMAL);
            $criteria->addSelectColumn(StatistiquesPeer::DELAI_MAXIMAL);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_DELAI_MAXIMAL);
            $criteria->addSelectColumn(StatistiquesPeer::TAUX_REPONSE);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_TAUX_REPONSE);
            $criteria->addSelectColumn(StatistiquesPeer::TAUX_SATISFACTION_REQUERANTS);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_TAUX_SATISFACTION);
            $criteria->addSelectColumn(StatistiquesPeer::CUMUL_TAUX_SATISFACTION);
            $criteria->addSelectColumn(StatistiquesPeer::DEMANDES_ASSISTANCE_INTERNE);
            $criteria->addSelectColumn(StatistiquesPeer::EVOLUTION_DEMANDE_INTERNE);
            $criteria->addSelectColumn(StatistiquesPeer::CUMUL_DEMANDE_INTERNE);
            $criteria->addSelectColumn(StatistiquesPeer::DATE_MISE_A_JOUR);
            $criteria->addSelectColumn(StatistiquesPeer::ID_ENTITE);
        } else {
            $criteria->addSelectColumn($alias . '.ID_STATISTIQUE');
            $criteria->addSelectColumn($alias . '.ANNEE');
            $criteria->addSelectColumn($alias . '.MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_RECUES');
            $criteria->addSelectColumn($alias . '.DEMANDES_RECUES_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_RECUES_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_TRAITEES');
            $criteria->addSelectColumn($alias . '.DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_CLOTUREES');
            $criteria->addSelectColumn($alias . '.DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_REPONSES_ENVOYEES');
            $criteria->addSelectColumn($alias . '.DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_HORS_ATTRIBUTION_ERRONEES');
            $criteria->addSelectColumn($alias . '.DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_COURS');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_AFFECTEES_REOUVERTE');
            $criteria->addSelectColumn($alias . '.DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_PROPOSITION_REPONSE');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS');
            $criteria->addSelectColumn($alias . '.DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS');
            $criteria->addSelectColumn($alias . '.DELAI_MOYEN_MOIS');
            $criteria->addSelectColumn($alias . '.EVOLUTION_DELAI_MOYEN');
            $criteria->addSelectColumn($alias . '.DELAI_MINIMAL_MOIS');
            $criteria->addSelectColumn($alias . '.EVOLUTION_DELAI_MINIMAL');
            $criteria->addSelectColumn($alias . '.DELAI_MAXIMAL');
            $criteria->addSelectColumn($alias . '.EVOLUTION_DELAI_MAXIMAL');
            $criteria->addSelectColumn($alias . '.TAUX_REPONSE');
            $criteria->addSelectColumn($alias . '.EVOLUTION_TAUX_REPONSE');
            $criteria->addSelectColumn($alias . '.TAUX_SATISFACTION_REQUERANTS');
            $criteria->addSelectColumn($alias . '.EVOLUTION_TAUX_SATISFACTION');
            $criteria->addSelectColumn($alias . '.CUMUL_TAUX_SATISFACTION');
            $criteria->addSelectColumn($alias . '.DEMANDES_ASSISTANCE_INTERNE');
            $criteria->addSelectColumn($alias . '.EVOLUTION_DEMANDE_INTERNE');
            $criteria->addSelectColumn($alias . '.CUMUL_DEMANDE_INTERNE');
            $criteria->addSelectColumn($alias . '.DATE_MISE_A_JOUR');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
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
        $criteria->setPrimaryTableName(StatistiquesPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            StatistiquesPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(StatistiquesPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 Statistiques
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = StatistiquesPeer::doSelect($critcopy, $con);
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
        return StatistiquesPeer::populateObjects(StatistiquesPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            StatistiquesPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(StatistiquesPeer::DATABASE_NAME);

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
     * @param      Statistiques $obj A Statistiques object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdStatistique();
            } // if key === null
            StatistiquesPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A Statistiques object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Statistiques) {
                $key = (string) $value->getIdStatistique();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Statistiques object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(StatistiquesPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   Statistiques Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(StatistiquesPeer::$instances[$key])) {
                return StatistiquesPeer::$instances[$key];
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
        foreach (StatistiquesPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        StatistiquesPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to statistiques
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
        $cls = StatistiquesPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = StatistiquesPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = StatistiquesPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                StatistiquesPeer::addInstanceToPool($obj, $key);
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
     * @return array (Statistiques object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = StatistiquesPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = StatistiquesPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + StatistiquesPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = StatistiquesPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            StatistiquesPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(StatistiquesPeer::DATABASE_NAME)->getTable(StatistiquesPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseStatistiquesPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseStatistiquesPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new StatistiquesTableMap());
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
        return StatistiquesPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Statistiques or Criteria object.
     *
     * @param      mixed $values Criteria or Statistiques object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Statistiques object
        }

        if ($criteria->containsKey(StatistiquesPeer::ID_STATISTIQUE) && $criteria->keyContainsValue(StatistiquesPeer::ID_STATISTIQUE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.StatistiquesPeer::ID_STATISTIQUE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(StatistiquesPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a Statistiques or Criteria object.
     *
     * @param      mixed $values Criteria or Statistiques object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(StatistiquesPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(StatistiquesPeer::ID_STATISTIQUE);
            $value = $criteria->remove(StatistiquesPeer::ID_STATISTIQUE);
            if ($value) {
                $selectCriteria->add(StatistiquesPeer::ID_STATISTIQUE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(StatistiquesPeer::TABLE_NAME);
            }

        } else { // $values is Statistiques object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(StatistiquesPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the statistiques table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(StatistiquesPeer::TABLE_NAME, $con, StatistiquesPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            StatistiquesPeer::clearInstancePool();
            StatistiquesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Statistiques or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Statistiques object or primary key or array of primary keys
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
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            StatistiquesPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Statistiques) { // it's a model object
            // invalidate the cache for this single object
            StatistiquesPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);
            $criteria->add(StatistiquesPeer::ID_STATISTIQUE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                StatistiquesPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(StatistiquesPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            StatistiquesPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Statistiques object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Statistiques $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(StatistiquesPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(StatistiquesPeer::TABLE_NAME);

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

        return BasePeer::doValidate(StatistiquesPeer::DATABASE_NAME, StatistiquesPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return Statistiques
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = StatistiquesPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);
        $criteria->add(StatistiquesPeer::ID_STATISTIQUE, $pk);

        $v = StatistiquesPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return Statistiques[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(StatistiquesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(StatistiquesPeer::DATABASE_NAME);
            $criteria->add(StatistiquesPeer::ID_STATISTIQUE, $pks, Criteria::IN);
            $objs = StatistiquesPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseStatistiquesPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseStatistiquesPeer::buildTableMap();

