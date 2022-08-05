<?php



/**
 * This class defines the structure of the 'statistiques_par_referentiel' table.
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
class StatistiquesParReferentielTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.StatistiquesParReferentielTableMap';

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
        $this->setName('statistiques_par_referentiel');
        $this->setPhpName('StatistiquesParReferentiel');
        $this->setClassname('StatistiquesParReferentiel');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('TYPE_REFERENTIEL', 'TypeReferentiel', 'INTEGER', false, null, null);
        $this->addColumn('ID_VAL_REFENTIEL', 'IdValRefentiel', 'INTEGER', false, null, null);
        $this->addColumn('TOTAL_RECLAMATIONS_PAR_MOIS', 'TotalReclamationsParMois', 'INTEGER', false, null, null);
        $this->addColumn('CUMUL_A_FIN_MOIS', 'CumulAFinMois', 'INTEGER', false, null, null);
        $this->addColumn('EVOLUTION_PAR_MOIS', 'EvolutionParMois', 'INTEGER', false, null, null);
        $this->addColumn('ID_STATISTIQUES', 'IdStatistiques', 'INTEGER', false, null, null);
        $this->addColumn('ANNEE', 'Annee', 'INTEGER', false, null, null);
        $this->addColumn('MOIS', 'Mois', 'VARCHAR', false, 2, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // StatistiquesParReferentielTableMap
