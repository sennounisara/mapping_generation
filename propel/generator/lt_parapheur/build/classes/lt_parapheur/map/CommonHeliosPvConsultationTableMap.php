<?php



/**
 * This class defines the structure of the 'Helios_pv_consultation' table.
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
class CommonHeliosPvConsultationTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonHeliosPvConsultationTableMap';

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
        $this->setName('Helios_pv_consultation');
        $this->setPhpName('CommonHeliosPvConsultation');
        $this->setClassname('CommonHeliosPvConsultation');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(true);
        // columns
        $this->addPrimaryKey('id', 'Id', 'INTEGER', true, null, null);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'consultation', 'organisme', true, 30, '');
        $this->addForeignKey('consultation_ref', 'ConsultationRef', 'INTEGER', 'consultation', 'reference', true, null, 0);
        $this->addColumn('nom_fichier', 'NomFichier', 'VARCHAR', true, 100, '');
        $this->addColumn('fichier', 'Fichier', 'INTEGER', true, null, 0);
        $this->addColumn('horodatage', 'Horodatage', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 20, '0000-00-00 00:00:00');
        $this->addColumn('taille', 'Taille', 'VARCHAR', true, 20, '0');
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonConsultation', 'CommonConsultation', RelationMap::MANY_TO_ONE, array('organisme' => 'organisme', 'consultation_ref' => 'reference', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonHeliosPvConsultationTableMap
