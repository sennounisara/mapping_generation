<?php



/**
 * This class defines the structure of the 'Helios_teletransmission_lot' table.
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
class CommonHeliosTeletransmissionLotTableMap extends TableMap
{

    /**
     * The (dot-path) name of this class
     */
    const CLASS_NAME = 'mpe.map.CommonHeliosTeletransmissionLotTableMap';

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
        $this->setName('Helios_teletransmission_lot');
        $this->setPhpName('CommonHeliosTeletransmissionLot');
        $this->setClassname('CommonHeliosTeletransmissionLot');
        $this->setPackage('mpe');
        $this->setUseIdGenerator(false);
        // columns
        $this->addForeignPrimaryKey('id_teletransmission', 'IdTeletransmission', 'INTEGER' , 'Helios_teletransmission', 'id', true, null, 0);
        $this->addForeignPrimaryKey('organisme', 'Organisme', 'VARCHAR' , 'Helios_teletransmission', 'organisme', true, 30, '');
        $this->addPrimaryKey('lot', 'Lot', 'INTEGER', true, null, 0);
        $this->addColumn('numero_marche', 'NumeroMarche', 'VARCHAR', true, 250, '');
        $this->addColumn('ids_env_actes_engagements', 'IdsEnvActesEngagements', 'VARCHAR', true, 255, '');
        $this->addColumn('ids_enveloppes_items', 'IdsEnveloppesItems', 'VARCHAR', true, 255, '');
        $this->addColumn('ids_docs_acceptes', 'IdsDocsAcceptes', 'VARCHAR', true, 255, '');
        $this->addColumn('ids_msg_notif', 'IdsMsgNotif', 'VARCHAR', true, 255, '');
        $this->addColumn('lot_in_transmission', 'LotInTransmission', 'CHAR', true, null, '');
        $this->addColumn('statut_envoi', 'StatutEnvoi', 'INTEGER', true, null, 1);
        $this->addColumn('id_zip_send', 'IdZipSend', 'VARCHAR', false, 40, null);
        $this->addColumn('nom_lettre_commande', 'NomLettreCommande', 'VARCHAR', false, 100, null);
        $this->addColumn('lettre_commande', 'LettreCommande', 'INTEGER', false, 20, null);
        $this->addColumn('horodatage', 'Horodatage', 'VARCHAR', true, 20, '');
        $this->addColumn('untrusteddate', 'Untrusteddate', 'VARCHAR', true, 20, '');
        $this->addColumn('taille', 'Taille', 'VARCHAR', true, 20, '');
        $this->addColumn('valider_comptable', 'ValiderComptable', 'CHAR', true, null, '0');
        $this->getColumn('valider_comptable', false)->setValueSet(array (
  0 => '0',
  1 => '1',
));
        // validators
    } // initialize()

    /**
     * Build the RelationMap objects for this table relationships
     */
    public function buildRelations()
    {
        $this->addRelation('CommonHeliosTeletransmission', 'CommonHeliosTeletransmission', RelationMap::MANY_TO_ONE, array('id_teletransmission' => 'id', 'organisme' => 'organisme', ), 'CASCADE', 'CASCADE');
    } // buildRelations()

} // CommonHeliosTeletransmissionLotTableMap
