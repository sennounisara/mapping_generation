<?php



/**
 * This class defines the structure of the 'statistiques' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lt_parapheur.map
 */
class StatistiquesTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.StatistiquesTableMap';

    /**
     * Initialize the table attributes, columns and validators
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws PropelException
     */
    public function initialize()
    {
        // attributes
        $this->setName('statistiques');
        $this->setPhpName('Statistiques');
        $this->setClassname('Statistiques');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_STATISTIQUE', 'IdStatistique', 'INTEGER', true, null, null);
        $this->addColumn('ANNEE', 'Annee', 'INTEGER', false, null, null);
        $this->addColumn('MOIS', 'Mois', 'VARCHAR', false, 2, null);
        $this->addColumn('DEMANDES_RECUES', 'DemandesRecues', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_RECUES_CUMUL_A_FIN_MOIS', 'DemandesRecuesCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_RECUES_EVOLUTION_PAR_MOIS', 'DemandesRecuesEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_TRAITEES', 'DemandesTraitees', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_TRAITEES_CUMUL_A_FIN_MOIS', 'DemandesTraiteesCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_TRAITEES_EVOLUTION_PAR_MOIS', 'DemandesTraiteesEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_CLOTUREES', 'DemandesCloturees', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_CLOTUREE_CUMUL_A_FIN_MOIS', 'DemandesClotureeCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_CLOTUREE_EVOLUTION_PAR_MOIS', 'DemandesClotureeEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_REPONSES_ENVOYEES', 'DemandesReponsesEnvoyees', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_REPONSES_ENVOYEES_CUMUL_A_FIN_MOIS', 'DemandesReponsesEnvoyeesCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_REPONSES_ENVOYEES_EVOLUTION_PAR_MOIS', 'DemandesReponsesEnvoyeesEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_HORS_ATTRIBUTION_ERRONEES', 'DemandesHorsAttributionErronees', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_HORS_ATTRIBUTION_ERRONEES_CUMUL_A_FIN_MOIS', 'DemandesHorsAttributionErroneesCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_HORS_ATTRIBUTION_ERRONEES_EVOLUTION_PAR_MOIS', 'DemandesHorsAttributionErroneesEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_COURS', 'DemandesEnCours', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_COURS_CUMUL_A_FIN_MOIS', 'DemandesEnCoursCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_COURS_EVOLUTION_PAR_MOIS', 'DemandesEnCoursEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_AFFECTEES_REOUVERTE', 'DemandesAffecteesReouverte', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_AFFECTEES_REOUVERTE_CUMUL_A_FIN_MOIS', 'DemandesAffecteesReouverteCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_AFFECTEES_REOUVERTE_EVOLUTION_PAR_MOIS', 'DemandesAffecteesReouverteEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_PROPOSITION_REPONSE', 'DemandesEnPropositionReponse', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_PROPOSITION_REPONSE_CUMUL_A_FIN_MOIS', 'DemandesEnPropositionReponseCumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_EN_PROPOSITION_REPONSE_EVOLUTION_PAR_MOIS', 'DemandesEnPropositionReponseEvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('DELAI_MOYEN_MOIS', 'DelaiMoyenMois', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_DELAI_MOYEN', 'EvolutionDelaiMoyen', 'INTEGER', false, null, null);
        $this->addColumn('DELAI_MINIMAL_MOIS', 'DelaiMinimalMois', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_DELAI_MINIMAL', 'EvolutionDelaiMinimal', 'INTEGER', false, null, null);
        $this->addColumn('DELAI_MAXIMAL', 'DelaiMaximal', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_DELAI_MAXIMAL', 'EvolutionDelaiMaximal', 'INTEGER', false, null, null);
        $this->addColumn('TAUX_REPONSE', 'TauxReponse', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_TAUX_REPONSE', 'EvolutionTauxReponse', 'INTEGER', false, null, null);
        $this->addColumn('TAUX_SATISFACTION_REQUERANTS', 'TauxSatisfactionRequerants', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_TAUX_SATISFACTION', 'EvolutionTauxSatisfaction', 'INTEGER', false, null, null);
        $this->addColumn('CUMUL_TAUX_SATISFACTION', 'CumulTauxSatisfaction', 'INTEGER', false, null, null);
        $this->addColumn('DEMANDES_ASSISTANCE_INTERNE', 'DemandesAssistanceInterne', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_DEMANDE_INTERNE', 'EvolutionDemandeInterne', 'INTEGER', false, null, null);
        $this->addColumn('CUMUL_DEMANDE_INTERNE', 'CumulDemandeInterne', 'INTEGER', false, null, null);
        $this->addColumn('DATE_MISE_A_JOUR', 'DateMiseAJour', 'VARCHAR', false, 45, null);
        $this->addColumn('ID_ENTITE', 'IdEntite', 'INTEGER', true, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // StatistiquesTableMap
