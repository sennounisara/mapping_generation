<?php



/**
 * This class defines the structure of the 'InscritHistorique' table.
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
class CommonInscritHistoriqueTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonInscritHistoriqueTableMap';

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
        $this->setName('InscritHistorique');
        $this->setPhpName('CommonInscritHistorique');
        $this->setClassname('CommonInscritHistorique');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('entreprise_id', 'EntrepriseId', 'INTEGER', true, null, 0);
        $this->addColumn('inscrit1', 'Inscrit1', 'VARCHAR', true, 64, '');
        $this->addColumn('mail1', 'Mail1', 'VARCHAR', true, 64, '');
        $this->addColumn('inscrit2', 'Inscrit2', 'VARCHAR', true, 64, '');
        $this->addColumn('mail2', 'Mail2', 'VARCHAR', true, 64, '');
        $this->addColumn('date', 'Date', 'VARCHAR', true, 32, '');
        $this->addColumn('action', 'Action', 'INTEGER', true, null, 0);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonInscritHistoriqueTableMap
