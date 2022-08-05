<?php



/**
 * This class defines the structure of the 'destinataire_mise_disposition' table.
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
class CommonDestinataireMiseDispositionTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonDestinataireMiseDispositionTableMap';

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
        $this->setName('destinataire_mise_disposition');
        $this->setPhpName('CommonDestinataireMiseDisposition');
        $this->setClassname('CommonDestinataireMiseDisposition');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Organisme', 'acronyme', true, 30, null);
        $this->addColumn('libelle', 'Libelle', 'VARCHAR', true, 255, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 30, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonOrganisme', 'CommonOrganisme', RelationMap::MANY_TO_ONE, array('organisme' => 'acronyme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonDestinataireMiseDispositionTableMap
