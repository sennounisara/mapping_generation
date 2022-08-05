<?php



/**
 * This class defines the structure of the 'Referentiel_contact' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.mpe.map
 */
class CommonReferentielContactTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonReferentielContactTableMap';

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
        $this->setName('Referentiel_contact');
        $this->setPhpName('CommonReferentielContact');
        $this->setClassname('CommonReferentielContact');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addColumn('sigle', 'Sigle', 'VARCHAR', false, 20, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 256, null);
        $this->addColumn('contact', 'Contact', 'VARCHAR', true, 256, null);
        $this->addColumn('actif', 'Actif', 'CHAR', true, null, '1');
        $this->addColumn('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonReferentielContactTableMap
