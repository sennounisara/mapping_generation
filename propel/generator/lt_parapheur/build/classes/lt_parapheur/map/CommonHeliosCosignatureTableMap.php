<?php



/**
 * This class defines the structure of the 'Helios_cosignature' table.
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
class CommonHeliosCosignatureTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'lt_parapheur.map.CommonHeliosCosignatureTableMap';

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
        $this->setName('Helios_cosignature');
        $this->setPhpName('CommonHeliosCosignature');
        $this->setClassname('CommonHeliosCosignature');
        $this->setPackage('lt_parapheur');
        $this->setUseIdGenerator(false);
        // columns
        $this->addPrimaryKey('id_fichier', 'IdFichier', 'INTEGER', true, 20, null);
        $this->addPrimaryKey('organisme', 'Organisme', 'VARCHAR', true, 30, '');
        $this->addColumn('signature_acte', 'SignatureActe', 'VARCHAR', true, 20, null);
        $this->addColumn('horodatage_acte', 'HorodatageActe', 'BLOB', true, null, null);
        $this->addColumn('untrusteddate_acte', 'UntrusteddateActe', 'VARCHAR', true, 20, null);
        $this->addColumn('taille_acte', 'TailleActe', 'VARCHAR', true, 20, null);
        $this->addColumn('id_Blob', 'IdBlob', 'VARCHAR', true, 20, null);
        $this->addColumn('idEnveloppe', 'Idenveloppe', 'INTEGER', true, 20, null);
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
    } // buildRelations()

} // CommonHeliosCosignatureTableMap
