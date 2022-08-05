<?php



/**
 * This class defines the structure of the 't_tache' table.
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
class TTacheTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.TTacheTableMap';

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
        $this->setName('t_tache');
        $this->setPhpName('TTache');
        $this->setClassname('TTache');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('ID_TACHE', 'IdTache', 'INTEGER', true, null, null);
        $this->addColumn('INTITULE', 'Intitule', 'VARCHAR', true, 255, null);
        $this->addColumn('DATE_ECHEANCE_PREVISIONNELLE', 'DateEcheancePrevisionnelle', 'DATE', true, null, null);
        $this->addColumn('DATE_ECHEANCE_REELLE', 'DateEcheanceReelle', 'DATE', false, null, null);
        $this->addColumn('RESPONSABLE', 'Responsable', 'VARCHAR', true, 255, null);
        $this->addColumn('TAUX_REALISATION', 'TauxRealisation', 'FLOAT', true, null, 0);
        $this->addColumn('ID_DEMANDE', 'IdDemande', 'INTEGER', true, null, null);
        $this->addColumn('ID_AGENT', 'IdAgent', 'INTEGER', true, null, null);
        $this->addColumn('AGENT', 'Agent', 'VARCHAR', true, 60, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // TTacheTableMap
